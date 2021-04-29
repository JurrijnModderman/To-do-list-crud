<?php 
	include 'conn.php';
// 	//routing

// 	function delete() {
// 		$conn = connection();
// 		$id = $_GET['Id']; 
// 		$sql = 'DELETE  FROM list WHERE Id = ' . $id;
// 		$query = $conn->prepare($sql);
// 		$query->execute();
// 		$all = $query->fetchAll();
// 		header('Location: index.php');
// 	}

// 	function update() {
// 		$conn = connection();
// 		$id = $_GET['Id'];
// 		$gebruikerValue = $_GET['gebruikerValue'];
// 		$taakValue = $_GET['taakValue'];
// 		$sql = 'UPDATE list SET Gebruiker=$gebruikerValue, Taak=$taakValue WHERE Id = ' . $id;
// 		$query = $conn->prepare($sql);
// 		$query->execute();
// 		$all = $query->fetchAll();
// 		header('Location: index.php');
// 	}

// 	function create() {
// 		header('Location: index.php');
// 	}

	// function getData() {
	// 	$conn = connection();
	// 	$sql = 'SELECT * FROM list';
	// 	$query = $conn->prepare($sql);
	// 	$query->execute();
	// 	$all = $query->fetchAll();
	// 	return $all;
	// }

?>