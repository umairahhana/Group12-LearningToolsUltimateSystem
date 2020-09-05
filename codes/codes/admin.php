<?php
	require"user_db.php";
	$student = "select * from student";
	$studentq = mysqli_query($con, $student);
	$lecturer = "select * from lecturer";
	$lecturerq = mysqli_query($con, $lecturer);
	
?>
<html>
	<head lang = "en">
		<meta charset = "utf-8">
		<title>Admin</title>
		<link rel = "stylesheet" href = "test.css" />
		<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<?php include 'adminheader.php' ?>
		<section class = "container-fluid" style="margin-top:80px">
			<div>
				<h1>Student List</h1>
				<table class = "userlist">
					<tr class = "tableheader">
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Delete</th>
						
					</tr>
					
					<?php
						while($row = mysqli_fetch_array($studentq)){
							echo "<tr>";
							echo "<th>".$row['Stu_ID']."</th>";
							echo "<th>".$row['Stu_name']."</th>";
							echo "<th>".$row['Stu_email']."</th>";
							echo "<th>".$row['Stu_phone']."</th>";
							echo "<th><a class='btn-danger fa fa-close' href=delstu.php?Stu_ID=".$row['Stu_ID']."></a></th>";
							echo "</tr>";
						}
					?>
				</table>
			</div>
			<div>
				<h1>Lecturer List</h1>
				<table class = "userlist">
					<tr class = "tableheader">
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Room</th>
						<th>Delete</th>
						
					</tr>
					
					<?php
						while($row = mysqli_fetch_array($lecturerq)){
							echo "<tr>";
							echo "<th>".$row['Lec_ID']."</th>";
							echo "<th>".$row['Lec_name']."</th>";
							echo "<th>".$row['Lec_email']."</th>";
							echo "<th>".$row['Lec_phone']."</th>";
							echo "<th>".$row['Lec_room']."</th>";
							echo "<th><a class='btn-danger fa fa-close' href=dellec.php?Lec_ID=".$row['Lec_ID']."></a></th>";
							echo "</tr>";
						}
					?>
				</table>
			</div>
		</section>
		<?php include 'footer.php' ?>
	</body>
</html>