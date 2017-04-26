<?php
require("./connection.php");

try {
    $name = $_POST["product_name"];
    echo $name;
    $sql = $conn->prepare("INSERT INTO product (name) VALUES (:name)");
    $sql->bindParam(':name', $name);
    // use exec() because no results are returned
    $sql->execute();
    echo "New record created successfully";
} catch(PDOException $e) {
	echo $e->getMessage();
} catch(Exception $error) {
	echo $error->getMessage();
}

$conn = null;
?>