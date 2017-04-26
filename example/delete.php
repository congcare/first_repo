<?php
require("./connection.php");

try {
	$id = $_GET['id'];

    $statement = $conn->prepare("DELETE FROM product WHERE id=$id");
    
    $statement->execute();
    // use exec() because no results are returned
    // $conn->exec($sql);
    echo "New record created successfully";
} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
} catch(Exception $error) {
	echo $error->getMessage();
}

$conn = null;
?>