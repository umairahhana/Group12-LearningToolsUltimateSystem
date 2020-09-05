<?php
	require "user_db.php";
	$sql = "insert into student select * from app_stu where Stu_ID ='$_GET[Stu_ID]'";
	$sql1 = "delete from app_stu where Stu_ID='$_GET[Stu_ID]'";
	if (mysqli_query($con,$sql)){
		echo "The student is insert successfully<br>";
	}
	if(mysqli_query($con, $sql1)){
		echo "After student approve, delete the request";
	}
	
	header("refresh:1 url=approve.php");

?>