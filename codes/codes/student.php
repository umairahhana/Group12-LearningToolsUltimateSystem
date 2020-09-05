<?php
	session_start();
	require "user_db.php";
	$id = $_SESSION['Stu_ID'];
	$viewpost = "select * 
				from announce, teach, enroll, subject
				where announce.teach_ID = teach.teach_ID
				and announce.sub_ID = subject.sub_ID
				and subject.sub_ID = enroll.sub_ID
				and Stu_ID = '$id'";
	$sql1 = mysqli_query($con, $viewpost);
?>
<html>
	<head lang = "en">
		<meta charset = "utf-8">
		<title>Student</title>
		<link rel = "stylesheet" href = "test.css" />
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include 'studentheader.php' ?>
		<section class = "container-fluid" style="margin-top:80px">
			<?php
				while($row = mysqli_fetch_array($sql1)){
					echo "<h1>".$row['sub_ID']." ".$row['sub_name']."</h1><br>";
					echo "<h3>".$row['announce_title']."</h3><br>";
					echo "<h5>".$row['announce_content']."</h5><br><hr>";
				}
			?>
		</section>
		<?php include 'footer.php' ?>
	</body>
</html>