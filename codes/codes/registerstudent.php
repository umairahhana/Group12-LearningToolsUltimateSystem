<?php include('serverstudent.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
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
			<h2>Register</h2>
		</div>
		
		<form method="post" action="registerstudent.php">

			<?php include('errors.php'); ?>

			<div class="input-group">
				<label>Student ID</label>
				<input type="text" name="Stu_ID" value="<?php echo $Stu_ID; ?>">
			</div>
			<div class="input-group">
				<label>Name</label>
				<input type="text" name="Stu_name" value="<?php echo $Stu_name; ?>">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="Stu_email" value="<?php echo $Stu_email; ?>">
			</div>
				<div class="input-group">
				<label>Phone</label>
				<input type="phone" name="Stu_phone">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="Stu_pass">
			</div>
			<div class="input-group">
				<label>Confirm password</label>
				<input type="password" name="Stu_pass_2">
			</div>
			
			<div class="input-group">
				<button type="submit" class="btn" name="reg_student">Register</button>
			</div>
			<p>
				Already a member? <a href="loginstudent.php">Sign in</a>
			</p>
		</form>
	</section>
</body>
</html>