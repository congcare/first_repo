<?php
$servername = "localhost";
$username = "root";
$password = "a";

try {
    $conn = new PDO("mysql:host=$servername;dbname=cong", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   

    $sql= "update product set name = 'cong' where id='2'";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
} catch(Exception $error) {
	echo $error->getMessage();
}

$conn = null;
?>