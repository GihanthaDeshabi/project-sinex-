<?php session_start(); //start the new session
if(isset($_POST["btnReg"]))
{
	$name=$_POST["txtName"];
	$email=$_POST["txtEmail"];
	$passwd=$_POST["txtPassword"];
	$conNum=$_POST["txtConNum"];
	$address=$_POST["txtAdd"];
	
	
	include_once "./conection.php";
	
	$sql = "INSERT INTO `user`(`email`, `username`, `password`, `phone`, `address`, `type`) VALUES ('".$email."','".$name."','".$passwd."','".$conNum."','".$address."','0')";
	
	mysqli_query($con,$sql);
	header('location:login.php');
	
}
?>