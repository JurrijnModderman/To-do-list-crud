<?php
	include 'conn.php';

	function delete() {
		$conn = connection();
		$id = $_GET['Id']; 
		$sql = 'DELETE Description, Time, Status, List_Id FROM list WHERE Id = ' . $id;
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		// return $all;
		header('Location: indexTask.php');
	}
	delete();
?>