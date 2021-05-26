<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
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
			Time:<input type="Duration" name="Duration" value="">
			Status:<input type="Status" name="Status" value="">
			<input type="submit" value="Create" name="submit">
		</form>
		<br>
		<a href="indexTask.php?List_Id=<?php echo $_GET['List_Id']?>&Task_Name=<?php echo $_GET['Task_Name']?>" style="margin-right: 730px;">Back</a>
	</div>
</body>
</html>