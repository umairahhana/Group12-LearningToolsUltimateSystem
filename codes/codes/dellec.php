<?php
	require "user_db.php";
	$sql = "delete from lecturer where Lec_ID='$_GET[Lec_ID]'";
	
	if (mysqli_query($con,$sql))
		echo "The lecturer is deleted";
	else
		echo "Error";
	
	header("refresh:1 url=admin.php");
?>