<?php
//function to make connection
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
//function to get all the data from list
function getData() {
	$conn = connection();
	$sql = 'SELECT * FROM list';
	$query = $conn->prepare($sql);
	$query->execute();
	$all = $query->fetchAll();
	return $all;
}
//function to get the data from task
function getDataTasks($case=0) {
	$conn = connection();
	$List_Id = $_GET['List_Id'];
	$sql = "SELECT * FROM task WHERE List_Id = " . $List_Id . " ORDER BY Time " . ($case == 0? "ASC" : "DESC");
	$query = $conn->prepare($sql);
	$query->execute();
	$all = $query->fetchAll();
	return $all;
}
$conn = null;
?>