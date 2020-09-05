<?php
	require "user_db.php";
?>
<html>
	<head lang = "en">
		<meta charset = "utf-8">
		<title>Edit to-do list</title>
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
				<h1>Edit To-Do List</h1>
				<form action = "addtodolist.php" method = "post">
					Title: <br>
					<input type = "text" name = "title" required><br>
					Deadline: <br>
					<input type = "datetime-local" name = "deadline" required><br>
					<input type = "submit" value = "Submit">
				</form>
			</div>
		</section>
		<?php include 'footer.php' ?>
	</body>
</html>