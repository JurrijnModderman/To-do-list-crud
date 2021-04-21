<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php include 'conn.php';?>
	<?php
		$sql = 'SELECT * FROM list';
		$query = $conn->prepare($sql);
		$query->execute();
		$all = $query->fetchAll();
	?>
	<li><a href="create.php">Create</a></li>
	<li><a href="update.php">Update</a></li>
	<li><a href="delete.php">Delete</a></li>
</body>
</html>