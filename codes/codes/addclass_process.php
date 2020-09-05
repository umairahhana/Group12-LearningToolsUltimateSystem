<?php
	session_start();
    require "user_db.php";
	$id = $_SESSION['Lec_ID'];
	$teach = "insert into teach(Lec_ID, sub_ID) values ('$id', '$_GET[sub_ID]')";
	mysqli_query($con, $teach);
	header("refresh:1 url=lecturer.php");
?>