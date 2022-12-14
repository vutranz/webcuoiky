<?php

    require_once 'connect.php';
   if (!isset($_POST['username']) || !isset($_POST['password']))  {
            die;
        }
    $username = $_POST['username'];
    $password = $_POST['password']; 
    
    
    $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
   
    try{
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count == 1) {
            $_SESSION['username']=  $username;
            header("location:./index.html");
            die();
        }else{
            header("location:./FormLogin.php");
        }
    }
    catch(PDOException $ex){
        echo $ex;
        die();
    }
?>