<?php
	include 'conn.php';
	function create() {
		$conn = connection();
		$User = $_POST['User'];
		$Task_name = $_POST['Task_name'];
		$sql = "INSERT INTO List (User, Task_name)
  		VALUES ('$User', '$Task_name')";
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		header('Location: index.php');
	}
	create();



?>