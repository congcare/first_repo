<?php 
require("../signin_login_logout/connection.php");
try {
	$id=$_GET['id'];
	$work= $_POST['work'];
	$dateBegin= $_POST['date_begin'];
	$totalHour = $_POST['total_hour'];
	$sql = "UPDATE todo_list_table SET work=:work, date_begin= :dateBegin, total_hour=:totalHour  WHERE id='$id'";
	$statement = $conn->prepare($sql);
	$statement->bindParam(':work',$work);
	$statement->bindParam(':dateBegin',$dateBegin);
	$statement->bindParam(':totalHour',$totalHour);
	$statement->execute();
	echo "update finished";
	// require('select.php');
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