<?php 
require("./connect.php");
try {
	$id=$_GET['id'];
	$sql = "DELETE FROM todo_list_table WHERE id=$id";
	$statement = $conn->prepare($sql);
	$statement->execute();
	
	}
catch(PDOException $e) 
	{
	echo $sql . "<br>" . $e->getMessage();
	} 
catch(Exception $error) 
	{
	echo $error->getMessage();
	}
$conn = null;	
 ?>