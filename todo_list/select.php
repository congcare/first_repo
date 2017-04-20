<?php 
require("./connect.php");
try {
	$sql = $conn->prepare("SELECT * FROM todo_list_table");
	$sql->execute();
	$all = $sql->fetchAll();
	} 
catch(PDOException $e) 
	{
	echo $sql . "<br>" . $e->getMessage();
	} catch(Exception $error) 
	{
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
 <h2>TODO_LIST_TABLE</h2>
 	<?php foreach ($all as $value) { ?>
		<p>
			STT: <?php echo $value['id']; ?>
			CONG VIEC:  <?php echo $value["work"]; ?>
			NGAY LAM: <?php echo "$value[date_begin]";?>
		 	THOI GIAN LAM: <?php echo "$value[total_hour]";?>
			<a href=<?php echo "./delete.php?id=" . $value['id']; ?>>DEL</a>
			<a href=<?php echo "./index.php?id=" . $value['id'] . "&work=" . $value['work'] . "&date_begin=" . $value['date_begin'] . "&total_hour=" . $value['total_hour']; ?>>EDIT</a>
		</p>
	<?php }; ?>
 </body>
 </html>