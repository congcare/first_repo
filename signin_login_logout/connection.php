<?php 
$servername = "localhost";
$username = "root";
$password = "a";
try {
	$conn = new PDO("mysql:host=$servername;dbname=account_schema", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
catch (PDOException $e) 
	{
	echo "Connection failed: " . $e->getMessage();
	}
 ?>