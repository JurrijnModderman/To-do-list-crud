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
	//aparte functie
	// $sql = 'SELECT * FROM list';
	// $query = $conn->prepare($sql);
	// $query->execute();
	// $all = $query->fetchAll();
}

function getDataFromList() {
	connection();
	$sql = 'SELECT * FROM list';
	$query = $conn->prepare($sql);
	$query->execute();
	$all = $query->fetchAll();
}

// connection();
getDataFromList();
//pdo
// $sql = "SELECT Id, Gebruiker, Taak FROM list";
// $result = $conn->query($sql);
// var_dump($result);
// if ($result->rowCount() > 0){
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["Id"]. " - Gebruiker: " . $row["Gebruiker"]. " Taak " . $row["Taak"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
$conn = null;
?>