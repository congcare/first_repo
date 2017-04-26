<?php 
require("../signin_login_logout/connection.php");
try	{
	$work = $_POST["work"];
	$date_begin = $_POST["date_begin"];
	$total_hour = $_POST["total_hour"];
	$sql= "INSERT INTO todo_list_table (work, date_begin, total_hour)
    VALUES (:work, :date_begin, :total_hour)";
	$statement = $conn->prepare($sql);
    // use exec() because no results are returned
   	$statement->bindParam(':work', $work);
   	$statement->bindParam(':date_begin', $date_begin);
   	$statement->bindParam(':total_hour', $total_hour);
   	$statement->execute();
   	echo "New record created successfully";
   	// require('./select.php');
   	header("Location: http://phplearning.dev/todo_list/select.php");
} 
catch(PDOException $e) {
	echo $e->getMessage();
}
catch (Exception $erorr) {
    echo $sql . "<br>" .  $erorr->getMessage();
}
$conn = null;	
 ?>