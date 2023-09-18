<?php

session_start();

include("connection.php");
$Rest_id=$_SESSION['rest_id'];

$Rest_Name=$_POST['Rest_Name'];
$Area=$_POST['Area'];
$City=$_POST['City'];
$Address=$_POST['Address'];
$Contact=$_POST['Contact'];
$Star=$_POST['Star'];

$q="update restaurantprofile set rest_name='$Rest_Name',area='$Area',city='$City',address='$Address' contact='$Contact',star='$Star' where Rest_id=$Rest_id";

print $q;
mysqli_query($cn,$q);

header("Location:Restaurant_Profile.php");
?>