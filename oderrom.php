<?php
session_start();
    require_once 'connection.php';
    $taikhoan=$_SESSION['username'];
    $image = $_POST['image'];
    $loaiphong = $_POST['loaiphong'];
    $songuoi = $_POST['songuoi'];
    $mota = $_POST['mota'];
    $name = $_POST['name'];
    $trangthai = $_POST['trangthai'];
    $price_update = $_POST['price_update'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $diachi = $_POST['diachi'];
    $ngayden = $_POST['ngayden'];
    $ngaydi = $_POST['ngaydi'];

    $sql = "INSERT INTO `oder_room`(`taikhoan`,`image`, `loaiphong`, `songuoi`, `mota`, `name`, `trangthai`, `price`, `fullname`, `phone`, `diachi`, `ngayden`,`ngaydi`) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
    try{ 
        if($trangthai="available")
        {
            $stmt = $conn->prepare($sql);
            $stmt->execute(array($taikhoan,$image,$loaiphong,$songuoi,$mota,$name,$trangthai,$price_update,$fullname,$phone,$diachi,$ngayden,$ngaydi));
            header("location:./index.php"); 
            die();  
        }
        else
        {
            alert("Hello! I am an alert box!!");
        }
       
   }
   catch(PDOException $ex){
       echo $ex;
       die();
   }
?>