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
		$List_Id = $_GET['List_Id'];
		$Description = $_GET['Description'];
		$Time = $_GET['Time'];
		$Status = $_GET['Status'];
		$Task_Name = $_GET['Task_Name'];
	?>
	<!-- form to change the current data from a task-->
	<div class="center" style="text-align: center; padding-top: 30px;">
		<h3>Update a Task!</h3>
		<form action="updateTaskFUNC.php" method="POST" style="padding-top: 30px;">
			<input type="hidden" name="Id" value="<?php echo $id; ?>">
			<input type="hidden" name="List_Id" value="<?php echo $List_Id; ?>">
			<input type="hidden" name="Task_Name" value="<?php echo $Task_Name; ?>">
			Description:<input type="Description" name="Description" value="<?php echo $Description;?>">
			Time(in minutes):<input type="Taak" name="Time" value="<?php echo $Time;?>">
			Status:<input type="Taak" name="Status" value="<?php echo $Status;?>">
			<input type="submit" value="Update" name="submit">
		</form>
		<br>
		<a href="indexTask.php?List_Id=<?php echo $_GET['List_Id']?>&Task_Name=<?php echo $_GET['Task_Name']?>" style="margin-right: 850px;">Back</a>
	</div>
</body>
</html>