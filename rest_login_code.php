<?php
session_start();

include("connection.php");


$Email=$_POST['Email'];
$Password=$_POST['Password'];

$q="select * from restaurantregister where Email='$Email' and Password='$Password'";
$rs=mysqli_query($cn,$q);

if($row=mysqli_fetch_array($rs)){
		$_SESSION['rest_id']=$row[0];
		header ("Location:Restaurant_profile.php");	
}else{
	header("Location:rest_login.php");
}

?>