<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$myDB = "to-do-list";
	try {
    	$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	echo "Connected successfully";
	} catch(PDOException $e) {
    	echo "Connection failed: " . $e->getMessage();
	}
	//aparte functie
	$sql = 'SELECT * FROM list';
	$query = $conn->prepare($sql);
	$query->execute();
	$all = $query->fetchAll();
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
    </tr>
<?php
    }
?>        
	
	<li><a href="create.php">Create</a></li>
	<li><a href="update.php">Update</a></li>
	<li><a href="delete.php">Delete</a></li>
</body>
</html>