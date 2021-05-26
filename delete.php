<?php
	include 'conn.php';
	function delete() {
		$conn = connection();
		$id = $_GET['Id']; 
		$sql = 'DELETE  FROM list WHERE Id = ' . $id;
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		header('Location: index.php');
	}
	delete();
?>