<?php
	session_start();
	require "user_db.php";
    
    if(!isset($_SESSION['Stu_ID'])){
        $_SESSION['msg'] = "You must log in first";
        header('location: index.php');
    }
	
	$sql = "select Stu_name from student where Stu_ID = ".$_SESSION['Stu_ID'];
	$sql1 = "select Stu_email from student where Stu_ID = ".$_SESSION['Stu_ID'];
	
	$name = mysqli_query($con, $sql);
	$email = mysqli_query($con, $sql1);
	
	while($row = mysqli_fetch_array($name)){
		$name1 = $row['Stu_name'];	
	}
	
	while($row = mysqli_fetch_array($email)){
		$email1 = $row['Stu_email'];	
	}
?>
<html>
	<head lang = "en">
		<meta charset = "utf-8">
		<title>Student Account</title>
		<link rel = "stylesheet" href = "test.css" />
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include 'studentheader.php' ?>
		<section class = "container-fluid" style="margin-top:80px">
			<?php if(isset($_SESSION['Stu_ID'])) : ?>
                
				<div class = "d-flex justify-content-center">
					<img src="images/student.png" width = "300px" height = "300px">
             
				</div>
				<div class = "d-flex justify-content-center">
                    <br><br>
					ID: <?php echo $_SESSION['Stu_ID']; ?>
                    <br>
					Name: <?php echo $name1; ?>
                    <br>
                    Email: <?php echo $email1; ?>
                </div>
                
            <?php endif ?>  
		</section>
	</body>
</html>