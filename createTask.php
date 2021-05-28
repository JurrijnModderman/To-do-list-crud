<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<?php
	include 'conn.php';
	$List_Id = $_GET['List_Id'];
	$Task_Name = $_GET['Task_Name'];
	?>
	<!-- form to create a new task -->
	<div class="center" style="text-align: center;">
		<h3>Create a new Task!</h3>
		<form action="createTaskFUNC.php" method="POST">
			<input type="hidden" name="List_Id" value="<?php echo $List_Id; ?>">
			<input type="hidden" name="Task_Name" value="<?php echo $Task_Name; ?>">
			Description:<input type="Description" name="Description" value="">
			Time(in minutes):<input type="Duration" name="Duration" value="">
			Status:<input type="Status" name="Status" value="">
			<input type="submit" value="Create" name="submit">
		</form>
		<br>
		<a href="indexTask.php?List_Id=<?php echo $_GET['List_Id']?>&Task_Name=<?php echo $_GET['Task_Name']?>" style="margin-right: 843px;">Back</a>
	</div>
</body>
</html>