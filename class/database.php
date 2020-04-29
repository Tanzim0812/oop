<?php

class db{
    
    public function __construct() {
        $sername='localhost';
        $username='root';
        $pass='';
        $dbname='dbtuts';
        
        $this->conn=mysqli_connect($sername,$username,$pass,$dbname);
    }
    
    public function insert($data) {
        $name=$data['name'];
        $email=$data['email'];
        $password=md5($data['password']);
        
        $sql="INSERT INTO oop (name,email,password) VALUES ('$name','$email','$password')";
        mysqli_query($this->conn, $sql);
        return $message="Data inserted";
    }
    
    public function select() {
        
      return mysqli_query($this->conn,"SELECT * FROM oop");
       
    }
    public function delete($id) {
        mysqli_query($this->conn,"DELETE FROM oop WHERE id ='$id'");
        header("location:index.php");
    }
    public function Updateprimary($id) {
       return mysqli_query($this->conn,"SELECT * FROM oop WHERE id='$id' ");
    }
    public function Updatedone($data) {
        $id=$data['id'];
        $name=$data['name'];
        $email=$data['email'];
        mysqli_query($this->conn,"UPDATE oop SET name='$name',email='$email' WHERE id='$id' ");
        header("location:index.php");
    }
}

?>

