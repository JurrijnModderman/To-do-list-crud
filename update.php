<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<?php 
		include 'conn.php';
		$id = $_GET['Id'];
		$User = $_GET['User'];
		$Task_Name = $_GET['Task_Name'];
	?>
	<!-- form to change the current data from a list-->
	<div class="center" style="text-align: center;">
		<h3>Update a List!</h3>
		<form action="updateFUNC.php" method="POST">
			<input type="hidden" name="Id" value="<?php echo $id; ?>">
			User:<input type="User" name="User" value="<?php echo $User;?>">
			Task_Name:<input type="Taak" name="Task_Name" value="<?php echo $Task_Name;?>">
			<input type="submit" value="Update" name="submit">
		</form>
		<br>
		<a href="index.php" style="margin-right: 525px;">Back</a>
	</div>
</body>
</html>