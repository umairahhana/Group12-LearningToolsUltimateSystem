<?php
	session_start();
    require "user_db.php";
	$id = $_SESSION['Stu_ID'];
	$sql = "delete from enroll where sub_ID ='$_GET[sub_ID]' and Stu_ID = $id";
	mysqli_query($con, $sql);
	header("refresh:1 url=student.php");
?>