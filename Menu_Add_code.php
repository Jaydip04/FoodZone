<?php
include("connection.php");
session_start();
$rest_id=$_SESSION['rest_id'];
include("connection.php");
$Title=$_POST['Title'];
$Category=$_POST['Category'];
//************************

$Menu="menu/".$_FILES['Photo']['name'];
move_uploaded_file($_FILES['Photo']['tmp_name'],$Menu);

//****************
$q="insert into menu(rest_id,filename,cat_id,title)values('$rest_id','$Menu','$Category','$Title')";
print $q;
mysqli_query($cn,$q);

header("Location:menu_view.php");

?>