<?php
	include 'conn.php';
	//function to insert the new data into the database
	function createTask() {
		$conn = connection();
		$Task_Name = $_POST['Task_Name'];
		$List_Id = $_POST['List_Id'];
		$Description = $_POST['Description'];
		$Time = $_POST['Duration'];
		$Status = $_POST['Status'];
		$sql = "INSERT INTO task (Description, Time, Status, List_Id)
  		VALUES ('$Description', '$Time', '$Status', '$List_Id')";
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		header("Location: indexTask.php?List_Id=$List_Id&Task_Name=$Task_Name");
	}
	createTask();
?>