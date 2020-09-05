<?php
	session_start();
	require 'user_db.php';
	$id = $_SESSION['Stu_ID'];
	$enroll = "select * from subject inner join enroll on enroll.sub_ID = subject.sub_ID where Stu_ID = $id";
	$sql = mysqli_query($con, $enroll);
?>

<html>
	<head lang = "en">
		<meta charset = "utf-8">
		<title>Time Table</title>
		<link rel = "stylesheet" href = "test.css" />
		<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<?php include 'studentheader.php' ?>
		<section class = "container-fluid" style="margin-top:80px">
			<div>
				<h1>Time Table</h1>
				<?php
					while($row = mysqli_fetch_array($sql)){
						echo "<h3>".$row['sub_ID']." ".$row['sub_name']."</h3>";
						echo "<h5>Lecture: </h5>";
						echo $row['sub_lec_start']."-".$row['sub_lec_end']."<br>";
						echo $row['sub_lec_day']."      ".$row['sub_lec_room']."<br>";
						echo "<h5>Tutorial: </h5>";
						echo $row['sub_tut_start']."-".$row['sub_tut_end']."<br>";
						echo $row['sub_tut_day']."      ".$row['sub_tut_room']."<br><hr>";
					}
				?>
			</div>
		</section>
		<?php include 'footer.php' ?>
	</body>
</html>