	var todo_task = document.getElementById("count_todo").value;
	var completed_task = document.getElementById("count_completed").value;
	var total_task = parseInt(todo_task) + parseInt(completed_task);
	
	var percentage_task = document.getElementById("task_percentage");
	var progress_task = document.getElementById("task_progress");
	document.getElementById("task_completed").innerHTML = completed_task ;
	document.getElementById("task_total").innerHTML = total_task;  

	var progressBar_task;
	if(total_task==0){
		progressBar_task = 0;
	}else{
		progressBar_task= completed_task * (1/total_task) * 100;
	}
	percentage_task.innerHTML = parseInt(progressBar_task) + "%";     
	progress_task.style.width = progressBar_task + "%";