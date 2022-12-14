<?php
    require_once 'connect.php';  
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/bootstrap.css">
    <link rel="stylesheet" href="./asset/css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>

    <!-- Begin: Header -->
    <header>
        <div class="headerBox">
            <div class="headerBox__logo">
                <a href=""><img
                        src="https://images.squarespace-cdn.com/content/v1/5a297d3dfe54eff9efa967c0/1513717270167-MOBLZQOP1MY8Z6M77L33/Logo_blue.png?format=300w"
                        class="logo"></img></a>
                <p class="nameHotel">Hotel <span>BlueSky</span></p>
            </div>

            <a href="cart.html" class="carts">
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
    <div class="main container">
        <div class="products row">
        <?php
            $search=$_POST['search'];
            $ngayden=$_POST['ngayden'];
             $sql = "SELECT * FROM `phong` WHERE songuoi='$search'";

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
                echo "<div class=\"product col-lg-4\">";
                echo "<div class=\"cart\">";
                echo    "<div class=\"product__img\">";
                echo        "<img src=\"$image\" >";
                echo    "</div>";
                echo    "<div class=\"product__description\">";
                echo        "<h3 class=\"name\">$name</h3>";
                echo        "<p class=\"cost\">$price</p>";
                echo        "<i class=\"fa-solid fa-location-dot icon-local\"> <span>HCM City</span></i><br>";
                echo        "<a href=\"detail_room.php?room=$id\" class=\"button-select\">Select</a>";
                echo    "</div>";
                echo "</div>";
                echo "</div>"; 
             }
          ?>
            <!-- <div class="product col-lg-4">
                <div class="cart">
                    <div class="product__img">
                        <img src="https://poliva.vn/wp-content/uploads/2019/08/Boutique-hotel-la-gi-2.jpg" alt="">
                    </div>
                    <div class="product__description">
                        <h3 class="name">King Size Bedroom</h3>
                        <p class="cost">$ 100</p>
                        <i class="fa-solid fa-location-dot icon-local"> <span>HCM City</span></i><br>
                        <div class="button-select">Select</div>
                    </div>
                </div>
            </div> -->

           <a><?php echo $ngayden;?></a>

        </div>
    </div>
    <script>

    </script>
</body>

</html>