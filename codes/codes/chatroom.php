<?php
	session_start();
	require "user_db.php";
	$sql = "select Stu_name from student where Stu_ID = ".$_SESSION['Stu_ID'];
	$name = mysqli_query($con, $sql);
	
	while($row = mysqli_fetch_array($name)){
		$name1 = $row['Stu_name'];	
	}
?>
<html>
	<head lang = "en">
		<meta charset = "utf-8">
		<title>Chat Room</title>
		<link rel = "stylesheet" href = "chat.css" />
		<link rel = "stylesheet" href = "test.css" />
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script>
			function sendMessage(e) {
				if(form1.msg.value == '') {
					alert("ALL FIELDS ARE MANDATORY!!!");
					return;
				}
				$("#send_massage").addClass("disabled");
				var uname = form1.uname.value;
				var msg = form1.msg.value;
				var xmlhttp = new XMLHttpRequest();
				
				xmlhttp.onreadystatechange = function() {
					if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById('messages').innerHTML = xmlhttp.responseText;
					}
				}
				
				xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
				xmlhttp.send();
				form1.msg.value = '';
			}

			$(document).ready(function (e) {
				$.ajaxSetup({
					cache: false	
				});
				$(document).focus();
				$("#send_massage").click(sendMessage);
				$("#send_massage").keyup(sendMessage);

				$("input").keypress(function(event) {
					if (event.which == 13) {
						event.preventDefault();
						sendMessage();
					}
				});
				setInterval( function(){ $('#messages').load('logs.php'); }, 100);
			});
		</script>
	</head>
	
	<body>
		<?php include 'studentheader.php' ?>
		<section class = "container-fluid" style="margin-top:80px">
			<div class='box'>
				<div class='header'>
					<h1>Chat Room</h1>
				</div>
				<div id="messages"> 	
				</div>
				<div class="bottom">
					<form name="form1" id = "form">
						<input type='hidden' name = "uname" value = "<?php echo $name1;?>"></input>
						<input type='text' id='msg_area' name="msg" autocomplete='off' autofocus placeholder='Type your message here...'/>
						<button type="submit" id="send_massage" style="margin-right:6px;">SEND</button>
					</form>
				</div>
			</div>
		</section>
		<?php include 'footer.php' ?>
	</body>
</html>