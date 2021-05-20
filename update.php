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
		$User = $_GET['User'];
		$Task_Name = $_GET['Task_Name'];
	?>
	<form action="updateFUNC.php" method="POST">
		<input type="hidden" name="Id" value="<?php echo $id; ?>">
		<!-- <input type="hidden" name="gebruiker" value="<?php echo $gebruiker; ?>">
		<input type="hidden" name="taak" value="<?php echo $taak; ?>"> -->
		User:<input type="User" name="User" value="<?php echo $User;?>">
		Task_Name:<input type="Taak" name="Task_Name" value="<?php echo $Task_Name;?>">
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