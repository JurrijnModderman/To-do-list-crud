<?php
	include 'conn.php';
	function update() {
		$conn = connection();
		$id = $_POST['Id'];
		$User = $_POST['User'];
		$Task_Name = $_POST['Task_Name'];
		$sql = "UPDATE list SET User='$User', Task_Name='$Task_Name' WHERE Id = " . $id;
		$query = $conn->prepare($sql);
		$query->execute();
		header('Location: index.php');
	}
	update();



?>