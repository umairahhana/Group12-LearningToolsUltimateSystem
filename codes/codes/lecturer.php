<?php
	session_start();
	require "user_db.php";
	$id1 = $_SESSION['Lec_ID'];
	$teach = "select * from subject inner join teach on teach.sub_ID = subject.sub_ID where Lec_ID = $id1";
	$sq2 = mysqli_query($con, $teach);
?>
<html>
	<head lang = "en">
		<meta charset = "utf-8">
		<title>Lecturer</title>
		<link rel = "stylesheet" href = "test.css" />
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include 'lecturerheader.php' ?>
		<section class = "container-fluid" style="margin-top:80px">
			<?php
				while($row = mysqli_fetch_array($sq2)){
					echo $row['sub_ID']." ".$row['sub_name']."<br><br>";
					echo "<form method = 'post' action='postannounce.php'>";
					echo "<input type = 'hidden' name ='id' value=".$row['sub_ID'].">";
					echo "Title: <br>";
					echo "<input type = 'text' name = 'posttitle' autocomplete='off'>";
					echo "<br><br>";
					echo "Content: <br>";
					echo "<textarea id = 'text' name = 'postcontent' rows = '10' cols = '50' autocomplete='off'></textarea>";
					echo "<br><br>";
					echo "<input type = 'submit' value = 'Post Announcement'>";
					echo "<br><br><hr>";
					echo "</form>";
				}
			?>
		</section>
		<?php include 'footer.php' ?>
	</body>
</html>