<?php
	
	$title = $_POST['title'];
	$deadline = $_POST['deadline'];
	
	$sql = "INSERT INTO todolist (title, deadline, Stu_ID) VALUES 
	('$title', '$deadline','".$_SESSION['user_id']."')";
	
	if(!mysqli_query($conn,$sql))
	{
		echo 'Query not inserted';
	}
	else
	{
		echo 'Query success added!';
	}
	
	header("refresh:2; url=index.php");

?>