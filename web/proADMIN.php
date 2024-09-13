<?php
    session_start();

    if($_SESSION['type']==0){
      header('Location:login.php');   
  }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS|ADMIN</title>
    <link rel="stylesheet" href="product.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
    .newItemBtm{  /* admin only */
  padding: 10px 20px;
  border-radius: 7px;
  left: 45%;
  bottom: 2%;
  position: relative;
  border: none;
  width: 150px;
  background-color: red;
  color: whitesmoke;
  font-size: 14px;
  text-transform: capitalize;
  cursor: pointer;
  transition: .5s;
  
}

.newItemBtm:hover{
  border: 2px solid red;
  color:black;
  background: white;
  box-shadow: 0 0 10px red, 0 0 20px red, 0 0 40px red;
}
    .newItembtnDiv {
    background: white;
    padding-top: 2%;
    padding-bottom: 2%;
  }
    .dis {
    line-height: 1;
    padding: 10px 0;
    font-size: 15px;
    color: black;
}
.button {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-top: 10px;
}

.button a {
    flex: 1 1 40px;
    padding: 5px;
    font-size: 12px;
    color: black;
    border: 4px solid red;
}

.button a.dele {
    background: white;
    color: black;
}

.button a.dele:hover {
    background: red;
    color: white;
}
.button a.updt:hover {
    background: red;
    color: white;
}
.container .content-box h3 {
    font-size: 35px;
    color: red;
    margin-top: 100px;
    margin-bottom: 30px;
    text-transform: uppercase;
    text-align: center;
}

.container .products-container .products {
    text-align: center;
    padding: 30px 30px;
    background: #fff;
    box-shadow: 0 .5rem 1rem rgba(255, 0, 0, .5);
    outline: 0 .5rem solid #ccc;
    outline-offset: -1.5rem;
    cursor: pointer;
}
</style>

</head>

<body>

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
              <a href=""><img src="image/360_F_397367515_GYSuQtv6HDhvbkodzHXko2Of7Wb6mRes.jpg"></a>
          </div>
          <div class="hambuguer">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
          </div>
          <nav class="nav-bar">
              <ul>
                  
                  <li><a href="proADMIN.php" class="#Products">Products Manage</a></li>
                  
                  
                  <li><a href="<?php echo $logLink?>" class="#Log In"><?php echo $logBtn?></a></li>
              </ul>
          </nav>
      </div>
  </header>
    <div class="container">
        <div class="content-box">
            <h3>MANAGE COLLECTIONS</h3>
            <div class="products-container">
            
                <?php include_once "./conection.php";

//sql query
$sql="SELECT * FROM `products`";

//execute the query against the database
$result=mysqli_query($con, $sql);

if (mysqli_num_rows($result)>0) {
  while($row=mysqli_fetch_assoc($result)) {
    ?>
                <div class="products" data-name="<?php echo $row["pid"]?>">
                    <img src="<?php echo $row["imgPath"]?>">
                    <h3><?php echo $row["pName"]?></h3>
                    <div class="price">Rs.<?php echo $row["price"]?></div>
                    <p class="dis"><?php echo $row["description"]?>.</p>
                    <div class="button">
                    <a href="EditAdvertisement.php?id=<?php echo $row["pid"]?>" class="updt">Update </a><br>
                    <a href="DeleteAdvertisement.php?id=<?php echo $row["pid"]?>" class="dele">Delete </a>
                </div>
                </div>


                <?php
    }
  }

  mysqli_close($con); // close the connection
  ?>


            </div>
        </div>
    </div>
   
    <div class="newItembtnDiv"> <button class="newItemBtm" onclick="window.location.href = 'Addnewitem.php'">Add New Item</button>
  </div>

</body>

</html>