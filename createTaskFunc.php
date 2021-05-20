<?php
	include 'conn.php';
	function create() {
		$conn = connection();
		$Description = $_POST['Description'];
		$Time = $_POST['Time'];
		$Status = $_POST['Status'];
		$sql = "INSERT INTO List (Description, Time, Status)
  		VALUES ('$Description', '$Time', '$Status')";
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		header('Location: index.php');
	}
	create();



?>