<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<input type="Id" name="Id">
	<input type="Gebruiker" name="Gebruiker">
	<input type="Taak" name="Taak">
<?php
	include 'conn.php';
	function update() {
		$conn = connection();
		$id = $_GET['Id'];
		$sql = 'UPDATE  FROM list WHERE Id = ' . $id;
	}
	update();
	header('Location: index.php');
?>
</body>
</html>