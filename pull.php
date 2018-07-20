<?php
	$table = "UNDEFINED";

	if ($_GET['table']) {
		$table = $_GET['table'];
	}

	$type = $table;

	// Parsing the table name
	// This is because we updated to full group of tables
	// Creating the selectors
	if (substr($table, 0, 4) == "city") {
		$table = "city_table";
	}
	else if (substr($table,0,7) == "terrain") {
		$table = "terrain_table";
	}

	$servername = "localhost";
	$username = "root";
	$password = "dermdermderm99";
	$dbname = "dndmap";

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		echo "UNABLE TO CONNECT";
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM ";
	$sql = $sql . $table . " WHERE type_category = '" . $type . "'";
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
