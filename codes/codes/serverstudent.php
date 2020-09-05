<?php 
	session_start();
	require 'user_db.php';
	// variable declaration
	$Stu_ID = "";
	$Stu_name = "";
	$Stu_email = "";
	$Stu_phone = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	// REGISTER USER
	if (isset($_POST['reg_student'])) {
		// receive all input values from the form
		$Stu_ID = mysqli_real_escape_string($con, $_POST['Stu_ID']);
		$Stu_name = mysqli_real_escape_string($con, $_POST['Stu_name']);
		$Stu_email = mysqli_real_escape_string($con, $_POST['Stu_email']);
		$Stu_phone = mysqli_real_escape_string($con, $_POST['Stu_phone']);
		$Stu_pass = mysqli_real_escape_string($con, $_POST['Stu_pass']);
		$Stu_pass_2 = mysqli_real_escape_string($con, $_POST['Stu_pass_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($Stu_ID)) { array_push($errors, "ID is required"); }
		if (empty($Stu_name)) { array_push($errors, "Name is required"); }
		if (empty($Stu_email)) { array_push($errors, "Email is required"); }
		if (empty($Stu_phone)) { array_push($errors, "Phone is required"); }
		if (empty($Stu_pass)) { array_push($errors, "Password is required"); }

		if ($Stu_pass != $Stu_pass_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO app_stu (Stu_ID, Stu_name, Stu_pass, Stu_email, Stu_phone) 
					  VALUES('$Stu_ID', '$Stu_name', '$Stu_pass', '$Stu_email','$Stu_phone')";
			mysqli_query($con, $query);

			$_SESSION['Stu_ID'] = $Stu_ID;
			$_SESSION['success'] = "Register successfully waiting for approve";
			header('location: loginstudent.php');
		}

	}
	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$Stu_ID = mysqli_real_escape_string($con, $_POST['Stu_ID']);
		$Stu_pass = mysqli_real_escape_string($con, $_POST['Stu_pass']);

		if (empty($Stu_ID)) {
			array_push($errors, "ID is required");
		}
		if (empty($Stu_pass)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM student WHERE Stu_ID='$Stu_ID' AND Stu_pass='$Stu_pass'";
			$results = mysqli_query($con, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['Stu_ID'] = $Stu_ID;
				$_SESSION['success'] = "You are now logged in";
				header('location: student.php');
			}else {
				array_push($errors, "Wrong ID/password combination");
			}
		}
	}

?>