<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db1";
	
	$con = new mysqli($servername, $username, $password, $dbname);
	
	if($con -> connect_error){
		die("Connection failed: ".$con -> connect_error);
	}
	echo "Connected successfully<br>";
?>