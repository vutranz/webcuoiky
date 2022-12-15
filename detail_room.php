<?php
    // SELECT * FROM `phong` WHERE maphong=20
    require_once 'connection.php';  
    $id=$_GET['room'];
    $sql = "SELECT * FROM `phong` WHERE maphong='$id'";

    try{
        $stmt = $conn->prepare($sql);
        $stmt->execute(); 
    }catch(PDOException $ex){
        die;
    }

    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
       $id=$row["maphong"];
       $image = $row["image"];
       $price=$row["gia"];
       $name=$row["name"];
       $trangthai=$row["trangthai"];
       $songuoi=$row["songuoi"];
       $loaiphong=$row["loaiphong"];
       $mota=$row["mota"];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/bootstrap.css">
    <link rel="stylesheet" href="detail_room.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
<form action="cart.php?idroom=<?php echo $id;?>" method="post">
        <p><?php echo $id;?></p>
        <image src="<?php echo $image;?>">
        <p><?php echo $price;?></p>
        <p><?php echo $name;?></p>
        <p><?php echo $trangthai;?></p>
        <p><?php echo $songuoi;?></p>
        <p><?php echo $loaiphong;?></p>
        <p><?php echo $mota;?></p>
    

        <input type="submit" name="datphong" class="btn btn-danger" value="Thêm vào giỏ hàng"></input>
    </form>
  
</body>

</html>