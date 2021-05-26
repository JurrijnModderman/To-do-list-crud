<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php
	include 'conn.php';
	$List_Id = $_GET['List_Id'];
	?>
	<!-- form to create a new task -->
	<form action="createTaskFUNC.php" method="POST">
		<input type="hidden" name="List_Id" value="<?php echo $List_Id; ?>">
		Description:<input type="Description" name="Description" value="">
		Time:<input type="Duration" name="Duration" value="">
		Status:<input type="Status" name="Status" value="">
		<input type="submit" value="Create" name="submit">
	</form>
</body>
</html>