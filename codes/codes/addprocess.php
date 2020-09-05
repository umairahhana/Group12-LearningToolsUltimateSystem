<?php
	session_start();
    require "user_db.php";
	$sub_ID = '';
	$sub_name = '';
	$sub_lec_start = '';
	$sub_lec_end = '';
	$sub_tut_start = '';
	$sub_tut_end = '';
	$sub_lec_room = '';
	$sub_tut_room = '';
	$sub_lec_day = '';
	$sub_tut_day = '';
	
	if(isset($_POST['sub_ID'])){
		$sub_ID=$_POST['sub_ID'];
	};
	if(isset($_POST['sub_name'])){
		$sub_name=$_POST['sub_name'];
	};
	if(isset($_POST['sub_lec_start'])){
		$sub_lec_start=$_POST['sub_lec_start'];
	};
	if(isset($_POST['sub_lec_end'])){
		$sub_lec_end=$_POST['sub_lec_end'];
	};
	if(isset($_POST['sub_tut_start'])){
		$sub_tut_start=$_POST['sub_tut_start'];
	};
	if(isset($_POST['sub_lec_day'])){
		$sub_lec_day=$_POST['sub_lec_day'];
	};
	if(isset($_POST['sub_tut_day'])){
		$sub_tut_day=$_POST['sub_tut_day'];
	};
	if(isset($_POST['sub_tut_end'])){
		$sub_tut_end=$_POST['sub_tut_end'];
	};
	if(isset($_POST['sub_lec_room'])){
		$sub_lec_room=$_POST['sub_lec_room'];
	};
	if(isset($_POST['sub_tut_room'])){
		$sub_tut_room=$_POST['sub_tut_room'];
	};
	
	$sql = "insert into subject (sub_ID, sub_name, sub_lec_start, sub_lec_end, sub_tut_start, sub_tut_end, sub_lec_day, sub_tut_day, sub_lec_room, sub_tut_room)
	values ('$sub_ID', '$sub_name', '$sub_lec_start', '$sub_lec_end', '$sub_tut_start', '$sub_tut_end', '$sub_lec_day', '$sub_tut_day', '$sub_lec_room', '$sub_tut_room')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Query not inserted';
	}
	else
	{
		echo 'Query success added!';
	}
	
	header("refresh:1; url=addsub.php");
?>