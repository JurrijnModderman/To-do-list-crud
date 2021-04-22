<?php
	include 'conn.php';
	function delete() {
		$conn = connection();
		$sql = 'Delete Id, Gebruiker, Taak WHERE Id = ['Id'], Gebruiker = ['Gebruiker'], Taak = ['Taak'] FROM list';
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		return $all;
	}
	// header('Location: index.php');
?>