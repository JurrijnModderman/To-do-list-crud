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
//function getDataTasks($sortField = 'time', $sortOrder = 'asc') {
function getDataTasks($case = 0, $sortField = 'Time', $sortOrder = 'asc') {
	$conn = connection();
	$listId = $_GET['List_Id'];
	//$sql = "SELECT * FROM task WHERE List_Id = " . $List_Id . " ORDER BY Time " . ($case == 0? "ASC" : "DESC");

	$sql = "SELECT * FROM task WHERE List_id = :listId ORDER BY :orderBy ASC";
	$query = $conn->prepare($sql);
	$query->bindParam(':listId', $listId, PDO::PARAM_STR);
	$query->bindParam(':orderBy', $sortField, PDO::PARAM_STR);
	//$query->bindParam(':orderDirection', $sortOrder, PDO::PARAM_INT);

	$query->execute();



	$all = $query->fetchAll();
	return $all;
}
$conn = null;
?>