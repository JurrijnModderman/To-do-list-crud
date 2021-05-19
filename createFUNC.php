<?php
	include 'conn.php';
	function create() {
		$conn = connection();
		$gebruikerValue = $_POST['gebruiker'];
		$taakValue = $_POST['taak'];
		$sql = "INSERT INTO List (Gebruiker, Taak)
  		VALUES ('$gebruikerValue', '$taakValue')";
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		header('Location: index.php');
	}
	create();



?>