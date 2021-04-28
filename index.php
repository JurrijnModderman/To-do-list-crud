<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php 
	include 'controller.php';
	$all = getData();
	?>

<table style="border: 1px solid black">
    <tr>
        <th>Id | </th>
        <th>Gebruiker | </th>
        <th>Taak | </th>
        <td><a href="create.php">Create</a></td>
    </tr>
 <?php
  foreach ($all as $row) {
 ?>   
    <tr>
        <td><?php echo $row['Id'] ?></td>
        <td><?php echo $row['Gebruiker'] ?></td>
        <td><?php echo $row['Taak'] ?></td>
		<td><a href="update.php?Id=<?php echo $row['Id']?>,Gebruiker=<?php echo $row['Gebruiker']?>,Taak=<?php echo $row['Taak']?>">Update</a></td>
		<td><a href="delete.php?Id=<?php echo $row['Id']?>">Delete</a></td>
    </tr>
<?php
    }
?>        
</body>
</html>