<?php
    require_once 'connection.php';
    if (!isset($_POST['username']) || !isset($_POST['password']) 
    || !isset($_POST['fullname']) || !isset($_POST['age'])
    || !isset($_POST['gioitinh']) || !isset($_POST['diachi']))  
    {
        die;
    }
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $gioitinh = $_POST['gioitinh'];
    $diachi = $_POST['diachi'];
   
   

    $sql = 'INSERT INTO `user`(`username`, `password`, `name`, `age`, `sex`, `isadmin`, `diachi`) VALUES(?,?,?,?,?,?,?)';

    try{
        
        $stmt = $conn->prepare($sql);
        $stmt->execute(array($username,$password,$fullname,$age,$gioitinh,0,$diachi));
        header("location:./FormLogin.php"); 
        // echo "<script>location.href ='index.php' </script>";
        die();
    }
    
    catch(PDOException $ex){
        echo $ex;
        die();
    }
?>