<?php
	$task_id = strip_tags($_POST['id']);
	include('connect.php');
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
	if($result = $mysqli->query("DELETE FROM task WHERE id='$task_id'")) {

	}
 ?>
