<?php
session_start();
include("connection.php");

$Email=$_POST['Email'];
$Password=$_POST['Password'];

$q="select * from admin where Email='$Email' and Password='$Password'";
$rs=mysqli_query($cn,$q);

if($row=mysqli_fetch_array($rs)){
	$_SESSION['ad_id']=$row[0];
		header ("Location:admin_home.php");	
}else{
	header("Location:Admin_login.php");
	
}
?>