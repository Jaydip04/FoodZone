<?php

session_start();

include("connection.php");

$Email=$_POST['Email'];
$Password=$_POST['Password'];

$q="select * from user_register where Email='$Email' and Password='$Password'";
$rs=mysqli_query($cn,$q);

if($row=mysqli_fetch_array($rs)){
		$_SESSION['reg_id'] = $row[0];
		header ("Location:index.php");
}else{
	header("Location:login.php");
}

?>