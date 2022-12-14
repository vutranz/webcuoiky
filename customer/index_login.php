<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./asset/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
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
            <div class="headerCtrl">
                <!-- <a onclick="SingUp()" href="./register.html" class="singUp">Sing Up</a>
                <a onclick="SingIn()" href="./login.html" class="singIn">Sing In</a> -->
                <p class="userLogin">
                    <i class="fa-regular fa-user"></i>
                    Nguyen Minh Nghia
                </p>
            </div>
        </div>
    </header>

    <!-- End: Header -->

    <!-- Begin: Slide -->
    <div class="slide">
        <div class="slide__input">
            <div class="slide__input-box">
                <p class="inputQuestion"> Where are you going?</p>
                <form class="slide-form">

                    <div class="slide-form__group form-date">
                        <label for="slide-formCheckIn">
                            <iconify-icon icon="mdi:calendar-arrow-right" class="slide-formIcon"></iconify-icon>
                        </label>
                        <input type="date" id="slide-formCheckIn" class="slide-form__inputDate input" name="slide-dateCheckIn" value="">
                    </div>

                    <div class="slide-form__group form-date">
                        <label for="">
                            <iconify-icon icon="mdi:calendar-arrow-left" class="slide-formIcon"></iconify-icon>
                        </label>
                        <input type="date" class="slide-form__inputDate input" name="slide-dateCheckOut" value="">
                    </div>

                    <div class="slide-form__group form-people">
                        <label for="">
                            <iconify-icon icon="ri:user-add-line" class="slide-formIcon"></iconify-icon>
                        </label>
                        <input type="" number class="side-form__inputPeople input" name="slide-peopleInRoom" value="1">
                    </div>
                    <input type="submit" value="SEARCH" name="slide-submit" class="slideSubmit">
                    
                </form>
            </div>
        </div>
    </div>
    <!-- End: Slide -->

    <!-- Begin: Top  -->
    <div class="top container">
        <h3 class="top__heading">Top Destinations</h3>
        <div class="top__heading__borderBottom"></div>
        <!-- Products -->
        <div class="top__des products row">
            <div class="product col-lg-4">
                <div class="product__border">
                    <a href="">
                        <div class="product__img">
                            <img src="https://assets-global.website-files.com/5c6d6c45eaa55f57c6367749/624b471bdf247131f10ea14f_61d31b8dbff9b500cbd7ed32_types_of_rooms_in_a_5-star_hotel_2_optimized_optimized.jpeg" alt="">
                            <div class="product__hover">
                                <p class="product__hover_des">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, officia veritatis! Laborum assumenda culpa asperiores natus perferendis necessitatibus ipsam at harum doloremque!
                                    <i class="fa-regular fa-circle-right product__hover-icon"></i>
                                </p>
                                <div class="product__hover-services">
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Free Wi-Fi</p>
                                    </div>
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Bathroom</p>
                                    </div>
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Free Wi-Fi</p>
                                    </div>
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Free Wi-Fi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="product__description">
                            <div class="product__name">King Size Bedroom</div>
                            <div class="product__cost">
                                <p class="cost">VND 576,549</p>
                                <p class="night">per<br> night</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="product col-lg-4">
                <div class="product__border">
                    <a href="">
                        <div class="product__img">
                            <img src="https://assets-global.website-files.com/5c6d6c45eaa55f57c6367749/624b471bdf247131f10ea14f_61d31b8dbff9b500cbd7ed32_types_of_rooms_in_a_5-star_hotel_2_optimized_optimized.jpeg" alt="">
                            <div class="product__hover">
                                <p class="product__hover_des">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, officia veritatis! Laborum assumenda culpa asperiores natus perferendis necessitatibus ipsam at harum doloremque!
                                    <i class="fa-regular fa-circle-right product__hover-icon"></i>
                                </p>
                                <div class="product__hover-services">
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Free Wi-Fi</p>
                                    </div>
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Bathroom</p>
                                    </div>
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Free Wi-Fi</p>
                                    </div>
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Free Wi-Fi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="product__description">
                            <div class="product__name">King Size Bedroom</div>
                            <div class="product__cost">
                                <p class="cost">VND 576,549</p>
                                <p class="night">per<br> night</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="product col-lg-4">
                <div class="product__border">
                    <a href="">
                        <div class="product__img">
                            <img src="https://assets-global.website-files.com/5c6d6c45eaa55f57c6367749/624b471bdf247131f10ea14f_61d31b8dbff9b500cbd7ed32_types_of_rooms_in_a_5-star_hotel_2_optimized_optimized.jpeg" alt="">
                            <div class="product__hover">
                                <p class="product__hover_des">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, officia veritatis! Laborum assumenda culpa asperiores natus perferendis necessitatibus ipsam at harum doloremque!
                                    <i class="fa-regular fa-circle-right product__hover-icon"></i>
                                </p>
                                <div class="product__hover-services">
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Free Wi-Fi</p>
                                    </div>
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Bathroom</p>
                                    </div>
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Free Wi-Fi</p>
                                    </div>
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Free Wi-Fi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="product__description">
                            <div class="product__name">King Size Bedroom</div>
                            <div class="product__cost">
                                <p class="cost">VND 576,549</p>
                                <p class="night">per<br> night</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="product col-lg-4">
                <div class="product__border">
                    <a href="">
                        <div class="product__img">
                            <img src="https://assets-global.website-files.com/5c6d6c45eaa55f57c6367749/624b471bdf247131f10ea14f_61d31b8dbff9b500cbd7ed32_types_of_rooms_in_a_5-star_hotel_2_optimized_optimized.jpeg" alt="">
                            <div class="product__hover">
                                <p class="product__hover_des">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, officia veritatis! Laborum assumenda culpa asperiores natus perferendis necessitatibus ipsam at harum doloremque!
                                    <i class="fa-regular fa-circle-right product__hover-icon"></i>
                                </p>
                                <div class="product__hover-services">
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Free Wi-Fi</p>
                                    </div>
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Bathroom</p>
                                    </div>
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Free Wi-Fi</p>
                                    </div>
                                    <div class="product__hover-service">
                                        <i class="fa-solid fa-check product__hover-ser-icon"></i>
                                        <p class="product__hover-service-name">Free Wi-Fi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="product__description">
                            <div class="product__name">King Size Bedroom</div>
                            <div class="product__cost">
                                <p class="cost">VND 576,549</p>
                                <p class="night">per<br> night</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Top -->
    <script src="index.js"></script>
</body>

</html>