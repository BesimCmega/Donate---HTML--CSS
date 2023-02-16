<?php
class DatabaseDonateMoney{
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
        $money = $_POST['money'];
       

        $query = "INSERT INTO donate_clothes(name, surname, email, phoneNumber, address, money) VALUES ('$name', '$surname','$email', '$number', '$adress', '$money')";
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
            
            echo "<script>alert('You have logged in successfuly. Thank you for your donation. God bless you!!');</script>";
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
}
?>