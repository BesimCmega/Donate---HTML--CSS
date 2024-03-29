<?php

class DatabaseDonateClothes{
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
            $number = $_POST['number'];
            $adress = $_POST['adress'];
            $clothes = $_POST['clothes'];
            $image = $_POST['image'];
            
            
    
            $query = "INSERT INTO donate_clothes(name, surname, email, phoneNumber, address, clothes, images) VALUES ('$name', '$surname','$email', '$number', '$adress', '$clothes', '$image')";
            if ($sql = $this->conn->query($query)) {

                echo "<script>alert('Thank you for your donation. God bless you!!');</script>";
                echo "<script>window.location.href = 'index.php';</script>";
            }

        else{
            echo "<script>alert('You have not been registered yet');</script>";
            echo "<script>window.location.href = 'register.php';</script>";
             }
        }
    }

    public function check(){
        
        if(isset($_POST['submit'])){

            
            $email = $_POST['email']; 
            
         
            $select = "SELECT * FROM register WHERE email = '$email' ";
         
            $result = mysqli_query($this->conn, $select);
         
            if(mysqli_num_rows($result) > 0){
         
               $row = mysqli_fetch_array($result);
         
               if($row['email'] == $email){
                
                echo "<script>alert('Thank you for your donation. God bless you!!');</script>";
                echo "<script>window.location.href = 'index.php';</script>";
                $this->insert();
               }
              
            }
            else{
                echo "<script>alert('The email is invalid. Go register first please!');</script>";
                echo "<script>window.location.href = 'register.php';</script>";
            }
         
         };
    }

    public function check2(){
        
        if(isset($_POST['submit'])){

            
            $email = $_POST['email']; 
            
         
            $select = "SELECT * FROM register WHERE email = '$email' ";
         
            $result = mysqli_query($this->conn, $select);
         
            if(mysqli_num_rows($result) > 0){
         
               $row = mysqli_fetch_array($result);
         
               if($row['email'] == $email){
                
                echo "<script>alert('Thank you for your donation. God bless you!!');</script>";
                echo "<script>window.location.href = 'clothesDashboard.php';</script>";
                $this->insert();
               }
              
            }
            else{
                echo "<script>alert('The email is invalid. Go register first please!');</script>";
                echo "<script>window.location.href = 'userDashboard.php';</script>";
            }
         
         };
    }

    public function fetch(){
        $data = null;
        $query = "SELECT * FROM donate_clothes";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    

    public function delete($id){

        $query = "DELETE FROM donate_clothes where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

    public function edit($id){
        
        $data = null;

        $query = "SELECT * FROM donate_clothes WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data){
        
        $query = "UPDATE donate_clothes SET name='$data[name]', surname='$data[surname]', email='$data[email]', phoneNumber='$data[number]', address='$data[address]', clothes='$data[clothes]', images='$data[image]'  WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

}
?>