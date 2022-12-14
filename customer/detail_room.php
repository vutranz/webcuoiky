<?php
    // SELECT * FROM `phong` WHERE maphong=20
    require_once 'connect.php';  
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
    <link rel="stylesheet" href="./asset/css/detail_room.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="main">
        <!-- Begin: Header -->
    <header>
        <div class="headerBox">
            <div class="headerBox__logo">
                <a href=""><img
                        src="https://images.squarespace-cdn.com/content/v1/5a297d3dfe54eff9efa967c0/1513717270167-MOBLZQOP1MY8Z6M77L33/Logo_blue.png?format=300w"
                        class="logo"></img></a>
                <p class="nameHotel">Hotel <span>BlueSky</span></p>
            </div>

            <a href="" class="carts">
                <div class="cart__count">1</div>
                <i class="fa-solid fa-cart-shopping"></i>
            </a>

            <div class="headerCtrl">
                <a onclick="SingUp()" href="./register.html" class="singUp">Sing Up</a>
                <a onclick="SingIn()" href="./login.html" class="singIn">Sing In</a>
                <!-- <p class="userLogin">
                    <i class="fa-regular fa-user"></i>
                    Nguyen Minh Nghia
                </p> -->
            </div>
        </div>
    </header>

    <!-- End: Header -->

        <div class="container">
            <div class="row">
                <div class="base1 col-lg-9">
                    <div class="name">
                        <h2 class="name__room">Classic Double Room</h2>
                        <p class="name__hotel">/ BlueSky</p>
                    </div>

                    <div class="base1__img">
                        <img src="<?php echo $image;?>">
                            
                    </div>

                    <div class="base1__description">
                        <p><?php echo $mota;?></p>
                    </div>
                </div>
                <div class="base2 col-lg-3">

                    <div class="base2__wrap-price">
                        <img src="https://images.squarespace-cdn.com/content/v1/5a297d3dfe54eff9efa967c0/1513717270167-MOBLZQOP1MY8Z6M77L33/Logo_blue.png?format=300w" alt="">
                        <div class="price-one-night">
                            <p class="one-night">Price <br> for 1 night</p>
                            <p class="price"><?php echo $price;?> VND</p> 
                        </div>
                    </div>

                    <a href="pay.php?roomdetail=<?php echo $id;?>" class="base2__button-book">Book Now</a>

                    <div class="base2__text-detail-room">
                        <p class="heading-detail-room">ROOM DETAILS</p>
                        <div class="infor-room">
                            <p>Loại phòng :<span class="detail-infor"><?php echo $loaiphong;?></span></p>
                            <p>Số người :<span class="detail-infor"><?php echo $songuoi;?></span></p>
                            <p>Trạng thái :<span class="detail-infor"><?php echo $trangthai;?></span></p>
                        </div>
                        <div class="available-services">
                            <div class="service">
                                <i class="fa-sharp fa-solid fa-circle icon-dot"></i>
                                <p class="service__name">Free wired Internet</p>
                            </div>
                            <div class="service">
                                <i class="fa-sharp fa-solid fa-circle icon-dot"></i>
                                <p class="service__name">Coffee/tea maker</p>
                            </div>
                            <div class="service">
                                <i class="fa-sharp fa-solid fa-circle icon-dot"></i>
                                <p class="service__name">Air conditioning</p>
                            </div>
                            <div class="service">
                                <i class="fa-sharp fa-solid fa-circle icon-dot"></i>
                                <p class="service__name">Cable TV service</p>
                            </div>
                            <div class="service">
                                <i class="fa-sharp fa-solid fa-circle icon-dot"></i>
                                <p class="service__name">Free newspaper</p>
                            </div>
                        </div>
                </div>
                <div class="extra-service">
                    <p class="heading-detail-room">EXTRA SERVICE</p>
                    <div class="check-services">
                        <div class="service">
                            <input type="checkbox" name="" id="bres">
                            <label for="bres" class="service__name action">Breakfast</label>
                            <div class="service__price">$10</div>
                        </div>
                        <div class="service">
                            <input type="checkbox" name="" id="lunch">
                            <label for="lunch" class="service__name action">Lunch</label>
                            <div class="service__price">$30</div>
                        </div>
                        <div class="service">
                            <input type="checkbox" name="" id="dinner">
                            <label for="dinner" class="service__name action">Dinner</label>
                            <div class="service__price">$20</div>
                        </div>
                        <div class="service">
                            <input type="checkbox" name="" id="bed">
                            <label for="bed" class="service__name action">Extra bed</label>
                            <div class="service__price">$15</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        </div>
    <div class="footer">
            
    </div>
</body>

</html>