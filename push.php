<?php

	$table = "UNDEFINED";
	$type = "UNDEFINED";
	
	$name = "UNDEFINED";
	
	$ico = "UNDEFINED";
	$x = "UNDEFINED";
	$y = "UNDEFINED";
	
	$x2 = "UNDEFINED";
	$y2 = "UNDEFINED";

	if ($_GET['table']) {
		$table = $_GET['table'];
	}
	
	if ($_GET['type']) {
		$type = $_GET['type'];
	}
	
	if ($_GET['name']) {
		$name = $_GET['name'];
	}
	
	if ($_GET['x']) {
		$x = $_GET['x'];
	}
	
	if ($_GET['y']) {
		$y = $_GET['y'];
	}
	
	if ($_GET['x2']) {
		$x2 = $_GET['x2'];
	}
	
	if ($_GET['y2']) {
		$y2 = $_GET['y2'];
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

	$sql = "";

	if (strcmp("city",$type)==0) {

		echo "Setting the push to type city";
		$sql = "INSERT INTO city_table (position_x,position_y,title,type_category) VALUES (".$x.",".$y.",'".$name."','".$table."');";

	}
	else if (strcmp("road",$type)==0) {
		echo "Setting the push to type road";
		$sql = "INSERT INTO ".$table." (x1,y1,x2,y2,name) VALUES (".$x.",".$y.",".$x2.",".$y2.",'".$name."');";
	}
	else if (strcmp("terrain",$type)==0) {
		echo "Setting the push to type terrain";
		$sql = "INSERT INTO terrain_table (position_x,position_y,title,type_category) VALUES (".$x.",".$y.",'".$name."','".$table."');";
	}

	if ($conn->query($sql) === TRUE) {
		echo "\nNew record created successfully";
	}

	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
?>
