<?php


  if (empty($_SESSION['email'])) {
    $logBtn="Login";
    $logLink="login.php";
  }
  else {
    $logBtn="LOGOUT";
    $logLink="logout.php";
}
?>


<header>
        <div class="nav-container">
            <div class="logo">
                <a href="home.php"><img src="image/360_F_397367515_GYSuQtv6HDhvbkodzHXko2Of7Wb6mRes.jpg"></a>
            </div>
            <div class="hambuguer">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <nav class="nav-bar">
                <ul>
                    <li><a href="home.php" class="#Home">Home</a></li>
                    <li><a href="product.php" class="#Products">Products</a></li>
                    
                    <li><a href="about.html" class="#About us">About Us</a></li>
                    <li><a href="Cart.php" class="#About us">Cart</a></li>
         
                    <li><a href="<?php echo $logLink?>" class="#Log In"><?php echo $logBtn?></a></li>
                </ul>
            </nav>
        </div>
    </header>