<?php
	include 'conn.php';
	function createTask() {
		$conn = connection();
		$List_Id = $_POST['List_Id'];
		$Description = $_POST['Description'];
		$Time = $_POST['Duration'];
		$Status = $_POST['Status'];
		$sql = "INSERT INTO task (Description, Time, Status, List_Id)
  		VALUES ('$Description', '$Time', '$Status', '$List_Id')";
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		header("Location: indexTask.php?List_Id=$List_Id");
	}
	createTask();



?>