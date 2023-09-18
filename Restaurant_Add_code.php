<?php
include("connection.php");
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Contact=$_POST['Contact'];
$Status=$_POST['Status'];
$q="insert into restaurantregister(user_name,email,password,contact,status)values('$Name','$Email','$Password','$Contact','$Status')";
print $q;
mysqli_query($cn,$q);
header("Location:Login.php");
?>