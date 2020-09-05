<?php
	require "user_db.php";
	$sql = "DELETE FROM subject WHERE sub_ID='$_GET[sub_ID]'";
	
	if (mysqli_query($con,$sql))
		echo "This subject success deleted!";
	else
		echo "Error";
	
	header("refresh:1 url=delsub.php");

?>