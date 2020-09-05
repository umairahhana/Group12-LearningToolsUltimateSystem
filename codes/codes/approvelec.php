<?php
	require "user_db.php";
	$sql = "insert into lecturer select * from app_lec where Lec_ID ='$_GET[Lec_ID]'";
	$sql1 = "delete from app_lec where Lec_ID='$_GET[Lec_ID]'";
	if (mysqli_query($con,$sql)){
		echo "The lecturer is insert successfully<br>";
	}
	if(mysqli_query($con, $sql1)){
		echo "After lecturer approve, delete the request";
	}
	
	header("refresh:1 url=approve.php");

?>