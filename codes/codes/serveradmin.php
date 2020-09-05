<?php 
	session_start();

	// variable declaration
	$admin_ID = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	require "user_db.php";

	// ... 
// LOGIN USER
	if (isset($_POST['login_user'])) {
		$admin_ID = mysqli_real_escape_string($con, $_POST['admin_ID']);
		$admin_pass = mysqli_real_escape_string($con, $_POST['admin_pass']);

		if (empty($admin_ID)) {
			array_push($errors, "ID is required");
		}
		if (empty($admin_pass)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$admin_pass = md5($admin_pass);
			$query = "SELECT * FROM admin WHERE admin_ID='$admin_ID' AND admin_pass='$admin_pass'";
			$results = mysqli_query($con, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['admin_ID'] = $admin_ID;
				$_SESSION['success'] = "You are now logged in";
				header('location: admin.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>