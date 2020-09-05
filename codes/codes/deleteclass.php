<?php
	session_start();
    require "user_db.php";
	$id = $_SESSION['Lec_ID'];
	$teach = "select * from subject inner join teach on teach.sub_ID = subject.sub_ID where Lec_ID = $id";
	$sql = mysqli_query($con, $teach);
?>
<html>
	<head lang = "en">
		<meta charset = "utf-8">
		<title>Delete Class</title>
		<link rel = "stylesheet" href = "test.css" />
		<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<?php include 'lecturerheader.php' ?>
		<section class = "container-fluid" style="margin-top:80px">
			<div>
				<h1>Class List</h1>
				<table class = "userlist">
					<tr class = "tableheader">
						<th>ID</th>
						<th>Subject</th>
						<th>StartLec</th>
						<th>EndLec</th>
						<th>LecDay</th>
						<th>LecRoom</th>
						<th>StartTut</th>
						<th>EndTut</th>
						<th>TutDay</th>
						<th>TutRoom</th>
						<th>Delete</th>
					</tr>
					<?php
						while($row = mysqli_fetch_array($sql)){
							echo "<tr>";
							echo "<th>".$row['sub_ID']."</th>";
							echo "<th>".$row['sub_name']."</th>";
							echo "<th>".$row['sub_lec_start']."</th>";
							echo "<th>".$row['sub_lec_end']."</th>";
							echo "<th>".$row['sub_lec_day']."</th>";
							echo "<th>".$row['sub_lec_room']."</th>";
							echo "<th>".$row['sub_tut_start']."</th>";
							echo "<th>".$row['sub_tut_end']."</th>";
							echo "<th>".$row['sub_tut_day']."</th>";
							echo "<th>".$row['sub_tut_room']."</th>";
							echo "<th><a class='btn-danger fa fa-close' href=deleteclass_process.php?sub_ID=".$row['sub_ID']."></a></th>";
							echo "</tr>";
						}
					?>
				</table>
			</div>
		</section>
		<?php include 'footer.php' ?>
	</body>
</html>