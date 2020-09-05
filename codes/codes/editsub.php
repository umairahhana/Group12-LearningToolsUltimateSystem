<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db1";
	
	$con = new mysqli($servername, $username, $password, $dbname);
	
	if($con -> connect_error){
		die("Connection failed: ".$con -> connect_error);
	}
	echo "Connected successfully";
	
	$subject = "select * from subject";
	$sub_list = mysqli_query($con, $subject);
?>
<html>
	<head lang = "en">
		<meta charset = "utf-8">
		<title>Edit Subject</title>
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
				<h1>Edit Subject</h1>
				<table class = "userlist">
					<tr class = "tableheader">
						<th>Subject ID</th>
						<th>Subject Name</th>
						<th>Subject Fee</th>
						<th>Start Lecture</th>
						<th>End Lecture</th>
						<th>Start Tutorial</th>
						<th>End Tutorial</th>
						<th>Lecture Room</th>
						<th>Tutorial Room</th>
						<th>Day</th>
						<th>Edit</th>
					</tr>
					<?php
						while($row = mysqli_fetch_assoc($sub_list)){
							echo "<tr>";
							echo "<th>".$row['sub_ID']."</th>";
							echo "<th>".$row['sub_name']."</th>";
							echo "<th>".$row['sub_fee']."</th>";
							echo "<th>".$row['sub_lec_start']."</th>";
							echo "<th>".$row['sub_lec_end']."</th>";
							echo "<th>".$row['sub_tut_start']."</th>";
							echo "<th>".$row['sub_tut_end']."</th>";
							echo "<th>".$row['sub_lec_room']."</th>";
							echo "<th>".$row['sub_tut_room']."</th>";
							echo "<th>".$row['sub_day']."</th>";
							echo "<th><button><i class = 'fa fa-close'></i></button></th>";
							echo "</tr>";
						}
					?>
				</table>
			</div>
		</section>
		<?php include 'footer.php' ?>
	</body>
</html>