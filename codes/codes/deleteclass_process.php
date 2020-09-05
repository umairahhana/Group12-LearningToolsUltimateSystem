<?php
	session_start();
    require "user_db.php";
	$id = $_SESSION['Lec_ID'];
	$sql = "delete from teach where sub_ID ='$_GET[sub_ID]' and Lec_ID = $id";
	mysqli_query($con, $sql);
	header("refresh:1 url=lecturer.php");
?>