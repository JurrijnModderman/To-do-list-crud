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
		$stmt = $conn->prepare("INSERT INTO task (Description, Time, Status, List_Id)
  		VALUES (:Description, :Duration, :Status, :List_Id)");
 		$stmt->bindParam(':Description', $Description);
 		$stmt->bindParam(':Duration', $Time);
 		$stmt->bindParam(':Status', $Status);
 		$stmt->bindParam(':List_Id', $List_Id);
		// $query = $conn->prepare($stmt);
		$stmt->execute();
		$all = $stmt->fetchAll();
		header("Location: indexTask.php?List_Id=$List_Id&Task_Name=$Task_Name");
	}
	createTask();
?>