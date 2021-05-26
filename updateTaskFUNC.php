<?php
	include 'conn.php';
	//function to update the task and put it into the database
	function updateTask() {
		$conn = connection();
		$id = $_POST['Id'];
		$Task_Name = $_POST['Task_Name'];
		$List_Id = $_POST['List_Id'];
		$Description = $_POST['Description'];
		$Time = $_POST['Time'];
		$Status = $_POST['Status'];
		$sql = "UPDATE task SET Description='$Description', Time='$Time', Status='$Status' WHERE Id = " . $id;
		$query = $conn->prepare($sql);
		$query->execute();
		header("Location: indexTask.php?List_Id=$List_Id&Task_Name=$Task_Name");
	}
	updateTask();
?>