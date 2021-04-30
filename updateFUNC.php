<?php
	include 'conn.php';
	function update() {
		$conn = connection();
		$id = $_POST['Id'];
		$gebruikerValue = $_POST['gebruiker'];
		$taakValue = $_POST['taak'];
		$sql = 'UPDATE list SET Gebruiker=$gebruikerValue, Taak=$taakValue WHERE Id = ' . $id;
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		header('Location: index.php');
	}
	update();



?>