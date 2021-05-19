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
		Gebruiker:<input type="Gebruiker" name="gebruiker" value="">
		Taak:<input type="Taak" name="taak" value="">
		<input type="submit" value="Create" name="submit">
	</form>
</body>
</html>