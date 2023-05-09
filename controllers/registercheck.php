<?php
require_once('../models/db.php'); 
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$location = $_POST["location"];
	$pnumber = $_POST["pnumber"];

	
	$sql = "INSERT INTO users (username, password , email, pnumber , location) VALUES ('$username', '$password', '$email' , '$pnumber',  '$location')";

	if ($conn->query($sql) === TRUE) {
		echo "Signup successful!";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>