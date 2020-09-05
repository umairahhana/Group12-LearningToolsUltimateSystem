<?php
	session_start();
    require "user_db.php";
	$id = $_SESSION['Stu_ID'];
	$enroll = "insert into enroll(Stu_ID, sub_ID) values ('$id', '$_GET[sub_ID]')";
	mysqli_query($con, $enroll);
	header("refresh:1 url=student.php");
?>