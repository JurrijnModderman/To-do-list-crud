<?php
	include 'conn.php';
	//function to delete a task
	function delete() {
		$conn = connection();
		$List_Id = $_GET['List_Id'];
		$id = $_GET['Id']; 
		$sql = 'DELETE  FROM task WHERE Id = ' . $id;
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		header("Location: indexTask.php?List_Id=$List_Id");
	}
	delete();
?>