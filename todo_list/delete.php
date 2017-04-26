<?php 
require("../signin_login_logout/connection.php");
try {
	$id=$_GET['id'];
	$sql = "DELETE FROM todo_list_table WHERE id=$id";
	$statement = $conn->prepare($sql);
	$statement->execute();	
	header("Location: http://phplearning.dev/todo_list/select.php");
	}
catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
} 
catch(Exception $error) {
	echo $error->getMessage();
}
$conn = null;	
?>