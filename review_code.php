<?php
include("connection.php");
$rest_id=$_POST['rest_id'];
$rev_date=date("Y-m-d");
session_start();
// $reg_id=$_SESSION['reg_id'];
$reg_id=1;

$msg=$_POST['msg'];
$q="insert into review(rest_id,rev_date,user_id,comment) values('$rest_id','$rev_date','$reg_id','$msg')";
mysqli_query($cn,$q);
header("location:thanks.php");
?>