			<?php
include("connection.php");
session_start();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="delete from review where rev_id='$id'";
	mysqli_query($cn,$q);
}
	$q="select * from review";
	$rs=mysqli_query($cn,$q);
	while($row=mysqli_fetch_array($rs))
	
		?>