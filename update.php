<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php 
		// include_once 'controller.php';
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
	?>
	<form action="update()" method="POST">
		<?php $id = $_GET['Id'];
		// $gebruikerValue = $_GET['gebruikerValue'];
		// $taakValue = $_GET['taakValue'];
		?>
		Gebruiker:<input type="Gebruiker" name="gebruikerValue" value="">
		Taak:<input type="Taak" name="taakValue" value="">
		<input type="submit" value="Update" name="submit">
	</form>
<!-- <?php
	include 'controller.php';
	// update();
	// function update() {
	// 	$conn = connection();
	// 	$id = $_GET['Id'];
	// 	$sql = 'UPDATE list SET Gebruiker=gebruikerValue, Taak=taakValue WHERE Id = ' . $id;
	// 	$query = $conn->prepare($sql);
	// 	$query->execute();
	// 	$all = $query->fetchAll();
	// }
	// header('Location: index.php');
?> -->
</body>
</html>