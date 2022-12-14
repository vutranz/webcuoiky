<?php
   require_once 'connect.php';  
   $id=$_GET['roomdetail'];
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
    <link rel="stylesheet" href="./asset/css/pay.css">
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

            <a href="./cart.html" class="carts">
                <div class="cart__count">1</div>
                <i class="fa-solid fa-cart-shopping"></i>
            </a>

            <div class="headerCtrl">
                <a href="./FormRegister.php" class="singUp">Sing Up</a>
                <a href="FormLogin.php" class="singIn">Sing In</a>
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
                    <h2 class="base1__heading">Who's traveling?</h2> 
                    <p class="base1__description">Please tell us who will be checking in</p>
                    <p class="heading__infor">YOUR INFORMATION</p>
                    <p class="node-singin"><a href="">Sing In</a> for fast booking or enter your personal information</p>

                    <div class="base1__hand">
                        <form action="" class="form-infor">
                            <div class="form-group">
                                <label for="f-name">First name<sup class="fa-solid fa-star-of-life"></sup></label><br>
                                <input type="text" name="" required id="f-name" placeholder="Enter first name">
                                <p class="error-mess"></p>
                            </div>

                            <div class="form-group">
                                <label for="l-name">Last name<sup class="fa-solid fa-star-of-life"></sup></label><br>
                                <input type="text" required name="" id="l-name" placeholder="Enter last name">
                                <p class="error-mess"></p>
                            </div>

                            <div class="form-group">
                                <label for="birth">Date of birth<sup class="fa-solid fa-star-of-life"></sup></label><br>
                                <input type="date" required name="" id="birth">
                                <p class="error-mess"></p>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone number<sup class="fa-solid fa-star-of-life"></sup></label><br>
                                <input type="tel" name="" id="phone" placeholder="Enter phone number">
                                <p class="error-mess"></p>
                            </div>

                            <div class="form-group">
                                <p class="sex">Gender<sup class="fa-solid fa-star-of-life"></sup></p>

                                <input class="input-radio" type="radio" name="sex" id="male">
                                <label  for="male">Male</label>

                                <input class="input-radio" type="radio" name="sex" id="female">
                                <label for="female">Female</label>

                                <p class="error-mess"></p>
                            </div>
                        </form> 
                    </div>


                </div>

                <div class="base2 col-lg-3">
                    <p class="base2__heading">BOOKING DETAILS</p>
                    <div class="base2__img">
                        <img src="<?php  echo $image;?>" alt="">
                        <p>Hilton Hotel</p>
                    </div>

                    <div class="base2__room-detail">
                        <div class="infor-room">
                            <p>Room :<span class="detail-infor"><?php echo $name;?></span></p>
                            <p>Check-in :<span class="detail-infor">Mon, Apr 13</span></p>
                            <p>Check-out :<span class="detail-infor">Tue, Apr 14</span></p>
                            <p>Persons :<span class="detail-infor"><?php echo $songuoi;?></span></p>
                        </div>
                    </div>

                    <div class="base2__infor-day">
                        <div class="group-day">
                            <p>1 Night Price</p>
                            <p class="cost">$100</p>
                        </div>
                        <div class="group-day">
                            <p>Taxes & Fees</p>
                            <p class="cost">$30</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Begin: Information -->

        <!-- Begin: Pay method -->
        <div  class="button-pay">Payment with MoMo <i class="fa-solid fa-arrow-right icon-arrow"></i> </div>
        <div class="modal">
            <img src="https://static.mservice.io/img/momo-upload-api-220418155002-637858938029609599.png" alt="">
        </div>
        <!-- End: Pay method -->
    </div>

    <script>
        var pay = document.querySelector(".button-pay")
        var modal = document.querySelector(".modal")

        pay.onclick = function() {
            modal.style.display = "flex"
        }

        window.onclick = function(e) {
            if(e.target == modal) {
                modal.style.display = "none"
            }
        }
    </script>
</body>

</html>