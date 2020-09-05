<?php include ('serverstudent.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Login system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="test.css">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include 'header.php';?>
	<section class = "container-fluid" style="margin-top:80px">
		<div class="header">
			<h2>Login</h2>
		</div>
		
		<form method="post" action="loginstudent.php">

			<?php include('errors.php'); ?>

			<div class="input-group">
				<label>Student ID</label>
				<input type="text" name="Stu_ID" >
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="Stu_pass">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login_user">Login</button>
			</div>
			<p>
				Not yet a member? <a href="registerstudent.php">Sign up</a>
			</p>
		</form>
	</section>
	<?php include 'footer.php';?>
</body>
</html>