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
        <th>Id | </th>
        <th>Description | </th>
        <th>Time | </th>
        <th>Status | </th>
        <th>List_Id | </th>
        <td><a href="create.php">Create</a></td>
        <td><a href="index.php">Algemene Lijst</a></td>
    </tr>
 <?php
  foreach ($all as $row) {
 ?>   
    <tr>
        <td><?php echo $row['Id'] ?> |</td>
        <td><?php echo $row['Description'] ?> |</td>
        <td><?php echo $row['Time'] ?> |</td>
        <td><?php echo $row['Status'] ?> |</td>
        <td><?php echo $row['List_Id'] ?> |</td>
		<td><a href="update.php?List_Id=<?php echo $row['List_Id']?>&Id=<?php echo $row['Id']?>&Description=<?php echo $row['Description']?>&Time=<?php echo $row['Time']?>&Status=<?php echo $row['Status']?>">Update</a></td>
		<td><a href="delete.php?Id=<?php echo $row['List_Id']?>">Delete</a></td>
    </tr>
<?php
    }
?>        
</body>
</html>