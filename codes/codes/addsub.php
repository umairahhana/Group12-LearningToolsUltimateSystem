<html>
	<head lang = "en">
		<meta charset = "utf-8">
		<title>Add Subject</title>
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
				<h1>Add Subject</h1>
				<form method = "post" action = "addprocess.php">
					Subject ID:<br>
					<input type = "text" name = "sub_ID" required><br>
					Subject Name: <br>
					<input type = "text" name = "sub_name" required><br>
					Lecture Time Start from: <br>
					<input type = "time" name = "sub_lec_start" required><br>
					Lecture Time End at: <br>
					<input type = "time" name = "sub_lec_end" required><br>
					Lecture Class Day: <br>
					<select name = "sub_lec_day" required>
						<option value = "Monday">Monday</option>
						<option value = "Tuesday">Tuesday</option>
						<option value = "Wednesday">Wednesday</option>
						<option value = "Thursday">Thursday</option>
						<option value = "Friday">Friday</option>
						<option value = "Saturday">Saturday</option>
						<option value = "Sunday">Sunday</option>
					</select><br>
					Lecture Room: <br>
					<input type = "text" name = "sub_lec_room" required><br><hr>
					Tutorial Time Start from: <br>
					<input type = "time" name = "sub_tut_start" required><br>
					Tutorial Time End at: <br>
					<input type = "time" name = "sub_tut_end" required><br>
					Tutorial Class Day: <br>
					<select name = "sub_tut_day" required>
						<option value = "Monday">Monday</option>
						<option value = "Tuesday">Tuesday</option>
						<option value = "Wednesday">Wednesday</option>
						<option value = "Thursday">Thursday</option>
						<option value = "Friday">Friday</option>
						<option value = "Saturday">Saturday</option>
						<option value = "Sunday">Sunday</option>
					</select><br>
					Tutorial Room: <br>
					<input type = "text" name = "sub_tut_room" required><br>
					<br>
					<input type = "submit">
 				</form>
			</div>
		</section>
		<?php include 'footer.php' ?>
	</body>
</html>