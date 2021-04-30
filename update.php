<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php 
		// include_once 'controller.php';
		include 'conn.php';
		$id = $_GET['Id'];
		$gebruiker = $_GET['Gebruiker'];
		$taak = $_GET['Taak'];
	?>
	<form action="updateFUNC.php" method="POST">
		<input type="hidden" name="Id" value="<?php echo $id; ?>">
		<!-- <input type="hidden" name="gebruiker" value="<?php echo $gebruiker; ?>">
		<input type="hidden" name="taak" value="<?php echo $taak; ?>"> -->
		Gebruiker:<input type="Gebruiker" name="gebruiker" value="<?php echo $gebruiker;?>">
		Taak:<input type="Taak" name="taak" value="<?php echo $taak;?>">
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