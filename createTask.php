<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php
	include 'conn.php';
	?>
	
	<form action="createTaskFUNC.php" method="POST">
		Description:<input type="Description" name="Description" value="">
		Time:<input type="Time" name="Time" value="">
		Status:<input type="Status" name="Status" value="">
		<input type="submit" value="Create" name="submit">
	</form>
</body>
</html>