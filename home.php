<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php 
	include 'conn.php';
	$all = getData();
	?>

<table style="border: 1px solid black">
    <tr>
        <th>Id | </th>
        <th>User | </th>
        <th>Task_Name | </th>
        <td><a href="create.php">Create</a></td>
        <td><a href="indexTask.php">Takenlijst</a></td>
    </tr>
 <?php
  foreach ($all as $row) {
 ?>   
    <tr>
        <td><?php echo $row['Id'] ?></td>
        <td><?php echo $row['User'] ?></td>
        <td><?php echo $row['Task_Name'] ?></td>
		<td><a href="update.php?Id=<?php echo $row['Id']?>&User=<?php echo $row['User']?>&Task_Name=<?php echo $row['Task_Name']?>">Update</a></td>
		<td><a href="delete.php?Id=<?php echo $row['Id']?>">Delete</a></td>
    </tr>
<?php
    }
?>        
</body>
</html>