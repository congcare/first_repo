<?php
require("./connection.php");

try {

    $sql = $conn->prepare("SELECT * FROM product");
    // use exec() because no results are returned
    $sql->execute();
    $products = $sql->fetchAll();
    var_dump($products);
    // foreach ($products as $product) {
    // 	echo "<p> Id: " . $product['id'] . " name: " . $product['name'] ."</p>";
    // }

    echo "New record created successfully";
} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
} catch(Exception $error) {
	echo $error->getMessage();
}

$conn = null;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php foreach ($products as $product) { ?>
		<p>
			Id: <?php echo $product[0]; ?>
			Name:  <?php echo $product[1]; ?>
			<a href=<?php echo "./delete.php?id=" . $product['id']; ?>>Xoa thang ni</a>
		</p>
	<?php }; ?>
</body>
</html>