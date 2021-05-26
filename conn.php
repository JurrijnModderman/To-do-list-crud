<?php
function connection() {
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
	return $conn;
}
function getData() {
	$conn = connection();
	$sql = 'SELECT * FROM list';
	$query = $conn->prepare($sql);
	$query->execute();
	$all = $query->fetchAll();
	return $all;
}
function getDataTasks() {
	$conn = connection();
	$List_Id = $_GET['List_Id'];
	$sql = 'SELECT * FROM task WHERE List_Id = ' . $List_Id;
	$query = $conn->prepare($sql);
	$query->execute();
	$all = $query->fetchAll();
	return $all;
}
$conn = null;
?>