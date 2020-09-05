<?php 
	session_start();
	require 'user_db.php';
	// variable declaration
	$Lec_ID = "";
	$Lec_name = "";
	$Lec_email = "";
	$Lec_phone = "";
	$Lec_room = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	// REGISTER lecturer
	if (isset($_POST['reg_lecturer'])) {
		// receive all input values from the form
		$Lec_ID = mysqli_real_escape_string($con, $_POST['Lec_ID']);
		$Lec_name = mysqli_real_escape_string($con, $_POST['Lec_name']);
		$Lec_email = mysqli_real_escape_string($con, $_POST['Lec_email']);
		$Lec_phone = mysqli_real_escape_string($con, $_POST['Lec_phone']);
		$Lec_room = mysqli_real_escape_string($con, $_POST['Lec_room']);
		$Lec_pass = mysqli_real_escape_string($con, $_POST['Lec_pass']);
		$Lec_pass_2 = mysqli_real_escape_string($con, $_POST['Lec_pass_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($Lec_ID)) { array_push($errors, "ID is required"); }
		if (empty($Lec_name)) { array_push($errors, "Name is required"); }
		if (empty($Lec_email)) { array_push($errors, "Email is required"); }
		if (empty($Lec_phone)) { array_push($errors, "Phone is required"); }
		if (empty($Lec_room)) { array_push($errors, "Room is required"); }
		if (empty($Lec_pass)) { array_push($errors, "Password is required"); }

		if ($Lec_pass != $Lec_pass_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$Lec_pass = $Lec_pass_2;
			$query = "INSERT INTO app_lec (Lec_ID, Lec_name, Lec_pass, Lec_email, Lec_phone, Lec_room) 
					  VALUES('$Lec_ID', '$Lec_name', '$Lec_pass', '$Lec_email', '$Lec_phone', '$Lec_room')";
			mysqli_query($con, $query);

			$_SESSION['Lec_ID'] = $Lec_ID;
			$_SESSION['success'] = "Register successfully waiting for approve";
			header('location: loginlecturer.php');
		}

	}

	
	// ... 
// LOGIN USER
	if (isset($_POST['login_user'])) {
		$Lec_ID = mysqli_real_escape_string($con, $_POST['Lec_ID']);
		$Lec_pass = mysqli_real_escape_string($con, $_POST['Lec_pass']);

		if (empty($Lec_ID)) {
			array_push($errors, "ID is required");
		}
		if (empty($Lec_pass)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM lecturer WHERE Lec_ID='$Lec_ID' AND Lec_pass='$Lec_pass'";
			$results = mysqli_query($con, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['Lec_ID'] = $Lec_ID;
				$_SESSION['success'] = "You are now logged in";
				header('location: lecturer.php');
			}else {
				array_push($errors, "Wrong ID/password combination");
			}
			
		}
	}

?>