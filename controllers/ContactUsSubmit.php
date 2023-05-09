<?php
require_once('../models/db.php'); 
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$username = $_POST["username"];
	$messages = $_POST["messages"];

	$sql = "INSERT INTO support (username, messages) VALUES ('$username', '$messages')";

	if ($conn->query($sql) === TRUE) {
		echo "Submitted!";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>