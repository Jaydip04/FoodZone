
<?php
include("connection.php");
$Cat_Name=$_POST['Cat_Name'];
//**********************
$Cat_Icon="category/".$_FILES['Cat_Icon']['name'];
move_uploaded_file($_FILES['Cat_Icon']['tmp_name'],$Cat_Icon);
$Ad_id =1;
//************************
$q="insert into category(cat_name,cat_icon)values('$Cat_Name','$Cat_Icon','$Ad_id')";
print $q;
mysqli_query($cn,$q);
?>