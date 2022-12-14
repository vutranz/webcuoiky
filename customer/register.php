<?php
    require_once 'connect.php';
    
    /*
    INSERT INTO `user` ( `username`, `password`, `name`, `age`, `sex`, `isadmin`) 
    VALUES ( 'vu', '123', 'Trần Vũ', '20', 'nam', '0');
    */

    if (!isset($_POST['id']) || !isset($_POST['username']) 
    || !isset($_POST['password']) || !isset($_POST['name']) 
    || !isset($_POST['age']) || !isset($_POST['sex']))  {
        die;
    }
    
    $id= $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
   

    $sql = ' INSERT INTO `user` ( `username`, `password`, `name`, `age`, `sex`, `isadmin`) 
    VALUES ( ?,?,?,?,?,?)';

    try{
        $stmt = $conn->prepare($sql);
        $stmt->execute(array($username,$password,$name,$age,$sex,0));
        header("location:./FormLogin.php"); 
        // echo "<script>location.href ='index.php' </script>";
        die();
        
    }
    catch(PDOException $ex){
        echo $ex;
        die();
    }
?>