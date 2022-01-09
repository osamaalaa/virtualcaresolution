<?php

include_once 'Task.php';
$task = new Task($db);
if(!empty($_POST['todo']) && $_POST['todo'] && $_POST['action'] == 'add') {	
	$task->task = $_POST['todo'];	
	$task->insert();	
}
?>