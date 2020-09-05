<?php
	session_start();
	require 'user_db.php';

	$result1 = mysqli_query($con,"SELECT * FROM logs ORDER BY id ASC");

	while($extract = mysqli_fetch_array($result1)) {
		echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
	}

?>