<?php
session_start();
echo $_GET["id"];
include_once "./conection.php";

$sql="DELETE FROM `cart` WHERE `id`='".$_GET["id"]."'";

//execute the query against the database
if(mysqli_query($con,$sql));
	{
        
            
            header('Location:Cart.php');
       
       
	}
?>