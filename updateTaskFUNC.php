<?php
	include 'conn.php';
	function updateTask() {
		$conn = connection();
		$id = $_POST['Id'];
		$Description = $_POST['Description'];
		$Time = $_POST['Time'];
		$Status = $_POST['Status'];
		$sql = "UPDATE list SET Description='$Description', Time='$Time', Status='$Status' WHERE Id = " . $id;
		$query = $conn->prepare($sql);
		$query->execute();
		header('Location: indexTask.php');
	}
	updateTask();



?>