<?php
	include 'conn.php';
	function createTask() {
		$conn = connection();
		$Description = $_POST['Description'];
		$Time = $_POST['Time'];
		$Status = $_POST['Status'];
		$sql = "INSERT INTO task (Description, Time, Status)
  		VALUES ('$Description', '$Time', '$Status')";
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		header('Location: indexTask.php');
	}
	createTask();



?>