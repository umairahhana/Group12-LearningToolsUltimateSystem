<?php
	session_start();
	require "todo-process.php";
	$errors = "";
	$task ="";
	$count_todo = array();
	$count_completed = array();
	$studentid = $_SESSION['Stu_ID'];
	//submit
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$deadline = $_POST['deadline'];
			$query = "INSERT INTO tasks (task,deadline,Stu_ID) VALUES ('$task','$deadline', '$studentid')";
			mysqli_query($con, $query);
			header('location: todolist.php');
		}
	}
	//edit
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($con, "SELECT task,deadline FROM tasks WHERE id=$id");
		if (@count($record) == 1 ) {
		$n = mysqli_fetch_array($record);
		$task = $n['task'];
		$deadline = $n['deadline'];
		}
	}
	// completed task
	if (isset($_GET['completed'])) {
		$id = $_GET['completed'];
		mysqli_query($con,"INSERT INTO completedtask (task, Stu_ID) SELECT task, Stu_ID FROM tasks WHERE id=$id ");
		mysqli_query($con, "DELETE FROM tasks WHERE id=$id");
		$_SESSION['message'] = "Task marked as completed!"; 
		header('location: todolist.php');
	}
	// select all tasks if page is visited or refreshed
	$tasks = mysqli_query($con, "SELECT * FROM tasks where Stu_ID = $studentid");
	$completedtask = mysqli_query($con, "SELECT * FROM completedtask where Stu_ID = $studentid");
?>
<html>
	<head lang = "en">
		<meta charset = "utf-8">
		<title>To Do List</title>
		<link rel = "stylesheet" href = "style1.css" />
		<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</head>
	
	<body>
		<?php include 'studentheader.php' ?>
		<section class = "container-fluid" style="margin-top:80px">
		
		
		 <!-- display progress bar -->
              <div class="progress">
                <div id='task_meter'><div id='task_progress'></div></div>
                <div id="task_percentage">0%</div> 
              </div>
              <div class="fraction">
                <span id="task_completed">0</span>/<span id="task_total">0</span>
              </div>
		
		
			<form method="post" action="todolist.php" class="input_form">
				<?php if (isset($errors)) { ?>
					<p><?php echo $errors; ?></p>
				<?php } ?>
			
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input class="task_input" type="text" name="task" placeholder="Enter an item..." value="<?php echo $task; ?>">
				<input class="date_input" type="date" name="deadline"  value="<?php echo $deadline; ?>">
				<?php if ($update == true): ?>
					<button class="btn" type="submit" name="update" title="update">update</button>
				<?php else: ?>
					<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
				<?php endif ?>                      
			</form>
			
			
			
			
			
			<div class="container">
                <fieldset class="todo">
					<legend>In Progress</legend>				
						<table>
							<thead>
								<tr>
									<th>N</th>
									<th>Tasks</th>
									<th>Deadline</th>
									<th style="width: 60px;">Action</th>
								</tr>
							</thead>
						
								<?php $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
									<tr>
										<td> <?php echo $i; ?> </td>
										<td class="task"> <?php echo $row['task']; ?> </td>
										<td class="task"> <?php echo $row['deadline']; ?> </td>
										<td class="delete"> 
											<a href="todolist.php?del_task=<?php echo $row['id']; ?>" class = "btn-danger fa fa-close"></a> 
											<a href="todolist.php?completed=<?php echo $row['id']; ?>" class="btn-success fa fa-check"></a> 
											<a href="todolist.php?edit=<?php echo $row['id']; ?>" class="btn-info fa fa-edit"></a>
										</td>
									</tr>
									 <?php array_push($count_todo," ") ?>	  
								<?php $i++;} ?>	
									
                    <?php $count = count($count_todo) ?>
                    <input id="count_todo" type="hidden"   value="<?php echo $count ?>">
							
						
						</table>
				</fieldset>	
            </div>
			<div class="container">
                <fieldset class="completed">
					<legend>Completed</legend>				
						<table>
							<thead>
								<tr>
									<th>N</th>
									<th>Tasks</th>
									<th style="width: 60px;">Action</th>
								</tr>
							</thead>
						
								<?php $i = 1; while ($row = mysqli_fetch_array($completedtask)) { ?>
									<tr>
										<td> <?php echo $i; ?> </td>
										<td class="task"> <?php echo $row['task']; ?> </td>
										<td class="delete"> 
											<a href="todo-process.php?del-completed=<?php echo $row['id']; ?>" class = "btn-danger fa fa-close"></a> 
										</td>
									</tr>
										<?php array_push($count_completed," ") ?>
								<?php $i++; } ?>	
												
				
                    <?php $count = count($count_completed) ?>
                    <input id="count_completed" type="hidden"  value="<?php echo $count ?>">
						
			
						</table>
				</fieldset>
			</div>
			  <script src="todolist.js" type="text/javascript"></script>
		</section>
		<?php include 'footer.php'?>
	</body>
</html>