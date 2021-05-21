<?php
	include 'conn.php';
	function updateTask() {
		$conn = connection();
		$id = $_POST['Id'];
		$List_Id = $_POST['List_Id'];
		$Description = $_POST['Description'];
		$Time = $_POST['Time'];
		$Status = $_POST['Status'];
		$sql = "UPDATE task SET Description='$Description', Time='$Time', Status='$Status' WHERE Id = " . $id;
		$query = $conn->prepare($sql);
		$query->execute();
		header("Location: indexTask.php?List_Id=$List_Id");
	}
	updateTask();



?>