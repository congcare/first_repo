<?php 
require("./connect.php");
try {
	$id=$_GET['id'];
	$viec= $_POST['works'];
	$ngay= $_POST['date_begins'];
	$thoigian = $_POST['total_hours'];
	$sql = "UPDATE todo_list_table SET work=:viec, date_begin= :ngay, total_hour=:thoigian  WHERE id='$id'";
	$statement = $conn->prepare($sql);
	$statement->bindParam(':viec',$viec);
	$statement->bindParam(':ngay',$ngay);
	$statement->bindParam(':thoigian',$thoigian);
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