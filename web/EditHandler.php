<?php session_start();
if(isset($_POST["btnSubmit"]))
{
//read the values user has given and assign to variables

	$pName=$_POST["pName"];
	$price=$_POST["price"];
	$dis=$_POST["dis"];
	

	if(!file_exists($_FILES["imageFile"]["tmp_name"])|| !is_uploaded_file($_FILES["imageFile"]["tmp_name"]))
	{
		$imageEdit=$_SESSION["imagePath"];
	}
	else{
		
		$imageEdit="uploads/".basename($_FILES["imageFile"]["name"]);
      	move_uploaded_file($_FILES["imageFile"]["tmp_name"],$imageEdit);
	}



//connect with the database
include_once './conection.php';
//sql query
$sql="UPDATE `products` SET `pName`='".$pName."',`price`='".$price."',`description`='".$dis."',`imgPath`='".$imageEdit."' WHERE `pid`='".$_SESSION["id"]."'";

//execute the query against the database
 if(mysqli_query($con,$sql));
 	{
		
            
            header('Location:proADMIN.php');
        
	}
}

?> 