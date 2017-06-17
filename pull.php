<?php

	$table = "UNDEFINED";

	if ($_GET['table']) {
		$table = $_GET['table'];
	}
	
	$servername = "localhost";
	$username = "root";
	$password = "tmp";
	$dbname = "dndmap";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		echo "UNABLE TO CONNECT";
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM ";
	$sql = $sql . $table;
	$sql = $sql . ';';
	
	$result = $conn->query($sql);

	$rows = array();
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
	} else {
		echo "0 results";
	}
	
	print json_encode($rows);
	$conn->close();
?>