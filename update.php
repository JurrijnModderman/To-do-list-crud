<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php 
		include 'conn.php';
		$id = $_GET['Id'];
		$User = $_GET['User'];
		$Task_Name = $_GET['Task_Name'];
	?>
	<form action="updateFUNC.php" method="POST">
		<input type="hidden" name="Id" value="<?php echo $id; ?>">
		User:<input type="User" name="User" value="<?php echo $User;?>">
		Task_Name:<input type="Taak" name="Task_Name" value="<?php echo $Task_Name;?>">
		<input type="submit" value="Update" name="submit">
	</form>
</body>
</html>