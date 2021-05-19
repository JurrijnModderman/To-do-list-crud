<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php
	include 'conn.php';
	?>
	
	<form action="createFUNC.php" method="POST">
		Gebruiker:<input type="User" name="User" value="">
		Taak:<input type="Task_Name" name="Task_Name" value="">
		<input type="submit" value="Create" name="submit">
	</form>
</body>
</html>