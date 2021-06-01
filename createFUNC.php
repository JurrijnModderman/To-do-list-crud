<?php
	include 'conn.php';
	//function to insert the new data into the database
	function create() {
		$conn = connection();
		$User = $_POST['User'];
		$Task_Name = $_POST['Task_Name'];
		$stmt = $conn->prepare("INSERT INTO List (User, Task_Name)
  		VALUES (:User, :Task_Name)");
  		$stmt->bindParam(':User', $User);
 		$stmt->bindParam(':Task_Name', $Task_Name);
		//$query = $conn->prepare($sql);
		$stmt->execute();
		$all = $stmt->fetchAll();
		header('Location: index.php');
	}
	create();
?>