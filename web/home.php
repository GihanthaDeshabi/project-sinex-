<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SINEX CLOTHING</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>





</head>

<body>
<?php
include_once "./navBar.php";?>
    <div class="content">
        <div class="content-box">
            <h2>Get up to 10%<br> off new products.</h2>
            <label> <span>The Best Quality clothing collection in the Sri Lanka.</span></label><br>
            <a href="product.php">SHOP NOW<i class='bx bxs-arrow-to-right'></i></a>
        </div>
    </div>

    <div class="category" id="category">
        <div class="category-title">
            <h2>OUR COLLECTIONS</h2>


        </div>
        <div class="category-box">
            <div class="box Women-box">
                <div class="box-content b2">

                    <label>WOMEN WEAR</label>
                    <a href="product.php">Go Here</a>
                </div>
                <img src="image/istockphoto-1014481398-612x612.jpg">
            </div>
            <div class="box Men-box">
                <div class="box-content b2">

                    <label>GENTS WEAR</label>
                    <a href="product.php">Go Here</a>
                </div>
                <img src="image/istockphoto-1210584470-612x612.jpg">

            </div>
            <div class="category-box">
                <div class="box Kids-box">
                    <div class="box-content b2">

                        <label>KIDS WEAR</label>
                        <a href="product.php">Go Here</a>
                    </div>
                    <img src="image/CP124315992.webp">
                </div>
                <div class="category-box">
                    <div class="box sports-box">
                        <div class="box-content b2">

                            <label>SPORTS WEAR</label>
                            <a href="product.php">Go Here</a>
                        </div>
                        <img src="image/JDSports-Fairview-Grand-Opening-24_2048x.webp">
                    </div>
                    <div class="category-box">
                        <div class="box Accessories-box">
                            <div class="box-content b2">
                                <label>ACCESSORIES</label>
                                <a href="#">Go Here</a>
                            </div>
                            <img src="image/afdodkw28sh5b38ntlcgcgpicwjxrh9jm0ufwkbphstmqhslqe1gtgaksibftchc-.jpg">
                        </div>

                    </div>
                </div>

                <div class="our-services">
                    <div class="our-services-box">
                        <div class="our-services-item">
                            <div class="our-services-icon">
                                <i class="bx bxs-user"></i>
                            </div>
                            <div class="our-services-body">
                                <h3>24/7 Services</h3>
                                <label>You can get amazing shoping experience stay at your home.</label>
                            </div>
                        </div>
                        <div class="our-services-item">
                            <div class="our-services-icon">
                                <i class="bx bxs-credit-card"></i>
                            </div>
                            <div class="our-services-body">
                                <h3>Return & Exchanges</h3>
                                <label>You can contact our customer service.</label>
                            </div>

                        </div>
                        <div class="our-services-item">
                            <div class="our-services-icon">
                                <i class="bx bxs-lock"></i>
                            </div>
                            <div class="our-services-body">
                                <h3>Secured Payment Methods</h3>
                                <label>You can pay your bill easily.</label>
                            </div>

                        </div>
                        <div class="footer">
                            <div class="footer-box">
                                <div class="footer-i-f1">
                                    <h4>Contact Us</h4>
                                    <label>Broadway road</label><br>
                                    <label>Matara</label><br>
                                    <label>Srilanka</label><br>
                                    <label>81000</label><br>
                                    <label>Hotline : 0703463281</label><br>
                                    <label>Whatsapp No :0703463281</label><br>
                                    <label>Email : Sinexclothingstore.gmail.com</label><br>
                                    <div class="button">
                                        <a href="contact us.html" class="btn">MORE </a>
                                    </div>
                                </div>



                                <div class="footer-i f4">
                                    <h4>SINEX CLOTHING STORE</h4><br>

                                    <label>Visit Our Website you can get full shopping experience.</label>
                                    <label>Follow Us</label><br>
                                    <input type="text" placeholder="Email Address">
                                    <button><i class='bx bxs-share'></i></button>

                                    <div class="social-media">
                                        <a href="#sinex clothing"><i class='bx bxl-instagram'></i></a>

                                        <a href="#sinex clothing"><i class='bx bxl-facebook'></i></a>
                                        <a href="#sinex clothing"><i class='bx bxl-twitter'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







</body>

</html>