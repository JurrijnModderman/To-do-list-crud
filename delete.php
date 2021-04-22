<?php
	include 'conn.php';
	function delete() {
		$conn = connection();
		$id = $_GET['id']; 
		$sql = 'DELETE  FROM list WHERE id = ' . $id;
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		return $all;
	}
	// header('Location: index.php');
?>