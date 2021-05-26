<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php
	include 'conn.php';
	?>
	<!-- form to create a new List -->
	<div class="center" style="text-align: center;">
		<h3>Create a new List!</h3>
		<form action="createFUNC.php" method="POST">
			User:<input type="User" name="User" value="">
			Task_Name:<input type="Task_Name" name="Task_Name" value="">
			<input type="submit" value="Create" name="submit">
		</form>
		<br>
		<a href="index.php" style="margin-right: 500px;">Back</a>
	</div>
</body>
</html>