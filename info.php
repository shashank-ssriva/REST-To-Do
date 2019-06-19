<?php
	include_once('config.php');
	$task = isset($_GET['task']) ? mysqli_real_escape_string($conn, $_GET['task']) :  "";
	$sql = "SELECT * FROM `my_to_do_db`.`my_to_do_tb` WHERE task='{$task}';";
	$get_data_query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

		if(mysqli_num_rows($get_data_query)!=0){
		$result = array();
		
		while($r = mysqli_fetch_array($get_data_query)){
			extract($r);
			$result[] = array("Task" => $task, "Date" => $date, 'Priority' => $priority);
		}
		$json = array("status" => 1, "info" => $result);
	}
	else{
		$json = array("status" => 0, "error" => "To-Do not found!");
	}
@mysqli_close($conn);

// Set Content-type to JSON
header('Content-type: application/json');
echo json_encode($json);
