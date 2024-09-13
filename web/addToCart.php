<?php
session_start();


include_once "./conection.php";

$sql="SELECT * FROM `products` WHERE `pid`='".$_GET["id"]."'";

$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$user=$_SESSION['email'];
$price=$row["price"];
$imgpath=$row["imgPath"];
$pName=$row["pName"];



$sql="INSERT INTO `cart`(`id`, `pname`, `price`, `imagePath`,`user`) VALUES (NULL,'".$pName."','".$price."','".$imgpath."','".$user."')";

if(mysqli_query($con,$sql));
	{
        
       
           header('Location:product.php');
        
       
	}
?>