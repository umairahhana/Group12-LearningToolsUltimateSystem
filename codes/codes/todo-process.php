<?php
	require 'user_db.php';
	//initialize variables
	$id = 0;
	$update = false;

    //insert/save tasks into database
	if (isset($_POST['save'])) {
      
		$task = $_POST['task'];
		mysqli_query($con, "INSERT INTO tasks (task, deadline) VALUES ('$task', '$deadline')"); 
		$_SESSION['message'] = "Task added!"; 
		header('location: todolist.php');
	}

	//update tasks in database
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$deadline = $_POST['deadline'];
        $task = $_POST['task'];
      
		mysqli_query($con, "UPDATE tasks SET task='$task',deadline='$deadline' WHERE id=$id");
		$_SESSION['message'] = "Task updated!"; 
		header('location: todolist.php');
	}

	// delete task
	if (isset($_GET['del_task'])) {
		$id = $_GET['del_task'];

		mysqli_query($con, "DELETE FROM tasks WHERE id=".$id);
		header('location: todolist.php');
	}
	
	//delete tasks from `completed` table
	if (isset($_GET['del-completed'])) {
		$id = $_GET['del-completed'];

		mysqli_query($con, "DELETE FROM completedtask WHERE id=".$id);
		$_SESSION['message'] = "Task deleted!"; 
		header('location: todolist.php');
    }
	
?>

