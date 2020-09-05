<?php
	session_start();
    require "user_db.php";
	$subid = $_POST['id'];
	$title = $_POST['posttitle'];
	$content = nl2br($_POST['postcontent']);
	$id = $_SESSION['Lec_ID'];
	$teachid = "select teach.teach_ID 
				from teach, subject, lecturer
				where teach.sub_ID = subject.sub_ID
				and teach.Lec_ID = '$id'";
	$t = mysqli_query($con, $teachid);
	while($row = mysqli_fetch_array($t)){
		$tt = $row['teach_ID']."<br>";
	}
	echo "<br><br>";
	$post = "insert into announce (announce_title, announce_content, teach_ID, sub_ID) values ('$title', '$content', '$tt', '$subid')";
	mysqli_query($con, $post);
	header('location: lecturer.php');
?>