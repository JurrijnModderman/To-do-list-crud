<?php
	include 'conn.php';
	function update() {
		$conn = connection();
		$id = $_GET['Id'];
		$gebruikerValue = $_GET['gebruikerValue'];
		$taakValue = $_GET['taakValue'];
		$sql = 'UPDATE list SET Gebruiker=$gebruikerValue, Taak=$taakValue WHERE Id = ' . $id;
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		header('Location: index.php');
	}
	update();



?>