<?php 
require("./connect.php");
try	{
	$works = $_POST["work"];
	$date_begins = $_POST["date_begin"];
	$total_hours = $_POST["total_hour"];
	$sql= "INSERT INTO todo_list_table (work, date_begin, total_hour)
    VALUES (:work, :date_begin, :total_hour)";
	$statement = $conn->prepare($sql);
    // use exec() because no results are returned
   	$statement->bindParam(':work', $works);
   	$statement->bindParam(':date_begin', $date_begins);
   	$statement->bindParam(':total_hour', $total_hours);
   	$statement->execute();
   	echo "New record created successfully";
	} 
catch(PDOException $e) 
	{
	echo $e->getMessage();
	}
catch (Exception $erorr) 
	{
    echo $sql . "<br>" .  $erorr->getMessage();
	}
 ?>