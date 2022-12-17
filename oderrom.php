<?php
    session_start();
    require_once 'connection.php';
    $id=$_POST['id'];
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
    // $taxi = $_POST['taxi'];
    // $ansang = $_POST['ansang'];
    // $antrua = $_POST['antrua'];
    // $antoi = $_POST['antoi'];
    
    // UPDATE `oder_room` SET `trangthai` WHERE trangthai='unavailable'
    $sql = "INSERT INTO `oder_room`(`taikhoan`,`image`, `loaiphong`, `songuoi`,
     `mota`, `name`, `trangthai`, `price`, `fullname`, `phone`,
      `diachi`, `ngayden`,`ngaydi`) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $sql1="UPDATE `phong` SET `trangthai`='unavailable' WHERE maphong='$id'";
    $sql2="UPDATE `oder_room` SET `trangthai`='unavailable' WHERE taikhoan='$taikhoan'";
    try{ 
        if($trangthai=="available")
        {
            $stmt = $conn->prepare($sql);
            $stmt->execute(array($taikhoan,$image,$loaiphong,$songuoi,$mota,
            $name,$trangthai,$price_update,$fullname,$phone,
            $diachi,$ngayden,$ngaydi));

            $stmt1 = $conn->prepare($sql1);
            $stmt1->execute(array());

            $stmt2 = $conn->prepare($sql2);
            $stmt2->execute(array());
            header("location:./index.php"); 
            die();  
        }
        else
        {
            echo '<script>alert("Phòng đã được đặt")</script>';
            header('Refresh: 1; URL = index.php');
        }
       
   }
   catch(PDOException $ex){
       echo $ex;
       die();
   }
?>