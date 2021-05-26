<?php
	include 'conn.php';
	//function to insert the new data into the database
	function create() {
		$conn = connection();
		$User = $_POST['User'];
		$Task_Name = $_POST['Task_Name'];
		$sql = "INSERT INTO List (User, Task_Name)
  		VALUES ('$User', '$Task_Name')";
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
		header('Location: index.php');
	}
	create();
?>