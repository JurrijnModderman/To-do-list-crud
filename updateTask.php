<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php 
		include 'conn.php';
		$id = $_GET['Id'];
		$List_Id = $_GET['List_Id'];
		$Description = $_GET['Description'];
		$Time = $_GET['Time'];
		$Status = $_GET['Status'];
	?>
	<form action="updateTaskFUNC.php" method="POST">
		<input type="hidden" name="Id" value="<?php echo $id; ?>">
		<input type="hidden" name="List_Id" value="<?php echo $List_Id; ?>">
		Description:<input type="Description" name="Description" value="<?php echo $Description;?>">
		Time:<input type="Taak" name="Time" value="<?php echo $Time;?>">
		Status:<input type="Taak" name="Status" value="<?php echo $Status;?>">
		<input type="submit" value="Update" name="submit">
	</form>
</body>
</html>