<?php
include("connection.php");
$Cat_Name=$_POST['Cat_Name'];
//**********************
$Cat_Icon="category/".$_FILES['Cat_Icon']['name'];
move_uploaded_file($_FILES['Cat_Icon']['tmp_name'],$Cat_Icon);
//************************
$id=$_POST['id'];
$q="update category set cat_name='$Cat_Name',cat_icon='$Cat_Icon' where cat_id='$id'";
print $q;
mysqli_query($cn,$q);
header("Location:Category_view.php");
?>