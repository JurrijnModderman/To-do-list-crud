<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<form action="controller.php" method="POST">
		Gebruiker:<input type="Gebruiker" name="gebruikerValue" value="<?php echo $row['Gebruiker']?>">
		Taak:<input type="Taak" name="taakValue" value="<?php echo $row['Taak']?>">
		<input type="submit" value="Update" name="submit">
	</form>
<?php
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
?>
</body>
</html>