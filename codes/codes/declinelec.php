<?php
	require "user_db.php";
	$sql = "delete from app_lec where Lec_ID='$_GET[Lec_ID]'";
	
	if (mysqli_query($con,$sql))
		echo "The request have been decline";
	else
		echo "Error";
	
	header("refresh:1 url=approve.php");

?>