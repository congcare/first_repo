<?php 
require("./connection.php");
try {	
	$userName = $_POST["username"];
	$password = $_POST["password"];
	$sql="SELECT username, password FROM account_table WHERE username= :userName";
	$statement = $conn->prepare($sql);
	$statement->bindValue(':userName', $userName);
	$statement->execute();
	$row = $statement->fetch();
	if (!$userName || !$password) {
		echo "please fill in";
		require('index.php');
	}else if (!$row['username']) {
		echo "TK CHUA DK";
		require('index.php');
	} else if ($row['password']!=$password){
		echo "SAI PASS";
		require('index.php');
	} else {					
		header("Location: http://phplearning.dev/todo_list/select.php");
	}
} 
catch(PDOException $e) {
	echo $e->getMessage();
}
catch (Exception $erorr) {
    echo $sql . "<br>" .  $erorr->getMessage();
}
$conn = null;

?>
<!-- <a href="index.php">VE HOME DANG NHAP</a>; -->