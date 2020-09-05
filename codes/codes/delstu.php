<?php
	require "user_db.php";
	$sql = "delete from student where Stu_ID='$_GET[Stu_ID]'";
	
	if (mysqli_query($con,$sql))
		echo "The student is deleted";
	else
		echo "Error";
	
	header("refresh:1 url=admin.php");
?>