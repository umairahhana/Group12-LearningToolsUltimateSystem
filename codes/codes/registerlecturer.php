<?php include('serverlecturer.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
		
		<form method="post" action="registerlecturer.php">

			<?php include('errors.php'); ?>

			<div class="input-group">
				<label>Lecturer ID</label>
				<input type="text" name="Lec_ID" value="<?php echo $Lec_ID; ?>">
			</div>
			<div class="input-group">
				<label>Name</label>
				<input type="text" name="Lec_name" value="<?php echo $Lec_name; ?>">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="Lec_email" value="<?php echo $Lec_email; ?>">
			</div>
			<div class="input-group">
				<label>Phone</label>
				<input type="phone" name="Lec_phone">
			</div>
			<div class="input-group">
				<label>Room</label>
				<input type="room" name="Lec_room">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="Lec_pass">
			</div>
			<div class="input-group">
				<label>Confirm password</label>
				<input type="password" name="Lec_pass_2">
			</div>
			
			<div class="input-group">
				<button type="submit" class="btn" name="reg_lecturer">Register</button>
			</div>
			<p>
				Already a member? <a href="loginlecturer.php">Sign in</a>
			</p>
		</form>
	</section>
</body>
</html>