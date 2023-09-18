<?php
include("connection.php");
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Contact=$_POST['Contact'];
$q="insert into user_register (name,email,password,contact )values ('$Name','$Email','$Password','$Contact')";
print $q;
mysqli_query($cn,$q);
header("Location:Login.php");
?>