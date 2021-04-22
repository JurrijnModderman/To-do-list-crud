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
        <th>Gebruiker | </th>
        <th>Taak | </th>
    </tr>
 <?php
  foreach ($all as $row) {
 ?>   
    <tr>
        <td><?php echo $row['Id'] ?></td>
        <td><?php echo $row['Gebruiker'] ?></td>
        <td><?php echo $row['Taak'] ?></td>
        <td><a href="create.php">Create</a></td>
		<td><a href="update.php">Update</a></td>
		<td><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
    </tr>
<?php
    }
?>        
</body>
</html>