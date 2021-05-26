<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php 
	include 'conn.php';
	$all = getDataTasks();
	?>
<table style="border: 1px solid black">
    <tr>
        <th>Description | </th>
        <th>Time | </th>
        <th>Status | </th>
        <td><a href="index.php">Back</a></td>
    </tr>
 <?php
 //loop to show the task menu and to crud them
  foreach ($all as $row) {
 ?>   
    <tr>
        <td><?php echo $row['Description'] ?> |</td>
        <td><?php echo $row['Time'] ?> |</td>
        <td><?php echo $row['Status'] ?> |</td>
		<td><a href="updateTask.php?List_Id=<?php echo $row['List_Id']?>&Id=<?php echo $row['Id']?>&Description=<?php echo $row['Description']?>&Time=<?php echo $row['Time']?>&Status=<?php echo $row['Status']?>">Update</a></td>
		<td><a href="deleteTask.php?Id=<?php echo $row['Id']?>&List_Id=<?php echo $row['List_Id']?>">Delete</a></td>
    </tr>
<?php
    }
?>     
    <tr>
        <td><a href="createTask.php?List_Id=<?php echo $_GET['List_Id']?>">Create</a></td> 
    </tr>   
</body>
</html>