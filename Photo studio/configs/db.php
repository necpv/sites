<?php
	$servername = "localhost";
	$database = "k15";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password, $database);
	$conn->set_charset("utf8");
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>