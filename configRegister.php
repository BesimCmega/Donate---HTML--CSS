<?php

class DatabaseRegister{
    private $server = 'localhost';
    private $username = 'root';
    private $password;
    private $database = 'donate';
    private $conn;

    public function __construct(){
        try{
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        }catch(Exception $e){
            echo 'Connection Failed' .$e->getMessage();
        }       
    }

    public function insert(){
        if(isset($_POST['submit'])){

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email']; 
            $password = $_POST['password'];
            $user_type = $_POST['user_type'];

            $query = "INSERT INTO register(name, surname, email, password, user_type) VALUES ('$name', '$surname','$email', '$password', '$user_type')";
            if ($sql = $this->conn->query($query)) {
                echo "<script>alert('You have been registered successfully!!');</script>";
                echo "<script>window.location.href = 'login.php';</script>";
            }else{
                echo "<script>alert('The user already exists!');</script>";
                echo "<script>window.location.href = 'index.php';</script>";
            }
        }
    }

    public function check(){
        
        if(isset($_POST['submit'])){

            
            $email = $_POST['email']; 
            $password = $_POST['password'];
         
            $select = "SELECT * FROM register WHERE email = '$email' && password = '$password' ";
         
            $result = mysqli_query($this->conn, $select);
         
            if(mysqli_num_rows($result) > 0){
         
               $row = mysqli_fetch_array($result);
         
               if($row['email'] == $email){
         
                echo "<script>alert('You have logged in successfuly!!');</script>";
                echo "<script>window.location.href = 'index.php';</script>";
               }
               elseif($row['password'] == $password){
         
                echo "<script>alert('You have been logged in successfuly!!');</script>";
                echo "<script>window.location.href = 'index.php';</script>";
         
               }
              
            }
            else{
                echo "<script>alert('The email or password is invalid!');</script>";
                echo "<script>window.location.href = 'login.php';</script>";
            }
         
         };
    }


    public function delete($id){

        $query = "DELETE FROM register where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

    public function edit($id){

        $data = null;

        $query = "SELECT * FROM register WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data){

        $query = "UPDATE register SET name='$data[name]', surname='$data[surnname]', email='$data[email]', password='$data[password]', user_type='$data[user_type]'' WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }
}  

?>