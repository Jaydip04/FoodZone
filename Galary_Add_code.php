<?php
session_start();
$rest_id=$_SESSION['rest_id'];
include("connection.php");
//*******************
$Galary="Galary/".$_FILES['File']['name'];
move_uploaded_file($_FILES['File']['tmp_name'],$Galary);
//******************
// $Rest_id=1;
$q="insert into galary(rest_id,file)values('$rest_id','$Galary')";
print $q;
mysqli_query($cn,$q);
header("Location:Galary_view.php");
?>
