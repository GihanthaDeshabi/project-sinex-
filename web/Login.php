<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="Lstylesheet.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body style="overflow: hidden;">
    <header>

        <div class="background">
            <div class="nav-container">
                <div class="logo">
                    <a href=""><img src="image/360_F_397367515_GYSuQtv6HDhvbkodzHXko2Of7Wb6mRes.jpg"></a>
                </div>
                <div class="hambuguer">

                    <div class="line"></div>
                </div>
                <nav class="nav-bar">
                    <ul>
                        <li><a href="home.php" class="#Home">Home</a></li>

                    </ul>
                </nav>
            </div>
    </header>

    </div>

    <div class="container">
        <div class="content">
            <h2 class="logo"></h2>
            <h2>SINEX CLOTHING</h2>

            <div class="text-sci">
                <h2>WELCOME <span>to Our Website.</span> </h2>
                <p>Register Our website and get full shopping experience.</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxs-user'></i></a>
                    <a href="#"><i class='bx bxs-cart-add'></i></a>
                    <a href="#"><i class='bx bxs-lock'></i></a>
                    <a href="#"><i class='bx bxs-credit-card'></i></a>
                </div>


            </div>
            <div class="logreg-box">
                <div class="form-box login">
                    <form action="loginHandler.php" method="post">
                        <h2>Sign In</h2>



                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope'></i></span>

                            <input type="email" name="txtEmail" required>
                            <label> Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>

                            <input type="password" name="txtPassword" required>
                            <label>Password</label>
                        </div>

                        <div class="remember-forgot">
                            <label><input type="checkbox">Remember me</label>
                            <a href="#">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn" name="btnSubmit">Sign In</button>

                        <div class="login-register">
                            <p>Don't have account? <a class="register-link">Sign Up</a></p>

                        </div>
                    </form>
                </div>


                <div class="form-box register">
                    <form action="registrationHandler.php" method="post">
                        <h2>Sign Up</h2>
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>

                            <input type="text" name="txtName" required>
                            <label> Name</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-phone'></i></span>

                            <input type="tel" name="txtConNum" required>
                            <label> Contact Number</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-home'></i></span>

                            <input type="text" name="txtAdd" required>
                            <label> Address</label>
                        </div>




                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope'></i></span>

                            <input type="email" name="txtEmail" required>
                            <label> Email</label>
                        </div>
                        <div class="input-box" id="pass">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>

                            <input type="password" name="txtPassword" id="txtPassword" required>
                            <label>Password</label>
                        </div>
                        <div class="input-box" id="conPass">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>

                            <input type="password" id="txtConfirmPassword" onkeyup="conPassColor()" required>
                            <label>Comfirm Password</label>
                        </div>

                        <div class="remember-forgot">
                            <label><input type="checkbox">I Agree to the terms & conditions.</label>

                        </div>
                        <button type="submit" class="btn" name="btnReg" onclick="passCheck()">Sign Up</button>

                        <div class="login-register">
                            <p>Already have account? <a href="#" class="login-link">Sign In</a></p>



                        </div>
                </div>

            </div>
            <script src="Lscript.js"></script>
            <script>
            function conPassColor() {
                let pass = document.getElementById("txtPassword").value;
                let conPass = document.getElementById("txtConfirmPassword").value;
                var passColor = document.querySelector('#pass');
                var conPassColor = document.querySelector('#conPass');

                if ((pass == '') || (conPass == '')) {
                    passColor.style.borderBottom = "2px solid #fff";
                    conPassColor.style.borderBottom = "2px solid #fff";
                } else if (pass.length > 7) {
                    if (pass != conPass) {
                        passColor.style.borderBottom = " 2px solid #ff0b0b";
                        conPassColor.style.borderBottom = " 2px solid #ff0b0b";
                    } else {
                        passColor.style.borderBottom = " 2px solid #00fa21";
                        conPassColor.style.borderBottom = " 2px solid #00fa21";
                    }
                } else {
                    passColor.style.borderBottom = " 2px solid 	#00FF";
                    conPassColor.style.borderBottom = " 2px solid #00FF";
                }
            }

            function passCheck() {
                let pass = document.getElementById("txtPassword").value;
                let conPass = document.getElementById("txtConfirmPassword").value;
                if (pass.length > 7) {
                    if (pass != conPass) {
                        alert("Password Not Matching");
                        event.preventDefault();
                        return false;
                    } else {
                        return true;
                    }
                } else {
                    alert("Password length less Plz Enter More Than 8 Characters");
                    event.preventDefault();
                    return false;
                }
            }
            </script>

</body>

</html>