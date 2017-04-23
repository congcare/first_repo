<?php 
require("./connection.php");

try {
	$userName = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$sql = "INSERT INTO account_table (username, password, email) VALUES (:username, :password, :email)";
	$statement = $conn->prepare($sql);
	$statement->bindParam(':username', $userName);
	$statement->bindParam(':password', $password);
	$statement->bindParam(':email', $email);
	$statement->execute();
	echo "signed in";
	} 
catch(PDOException $e) 
	{
	echo $e->getMessage();
	}
catch (Exception $erorr) 
	{
    echo $sql . "<br>" .  $erorr->getMessage();
	}
$conn = null;
?>
