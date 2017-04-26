<?php 
require("../signin_login_logout/connection.php");
try {
	$sql = $conn->prepare("SELECT * FROM todo_list_table");
	$sql->execute();
	$all = $sql->fetchAll();
} 
catch(Exception $e) {
	echo $sql . "<br>" . $e->getMessage();
} 
$conn = null;
 ?>
 <!DOCTYPE html>
 <html>
 <body>
 <div><a href="./index.php">log out</a></div>
 <a href="../todo_list/add_view.php">ADD TODO LIST</a><br>
 <h2>TODO LIST TABLE</h2>
 	<?php foreach ($all as $value) { ?>
		<p>
			CONG VIEC:  <?php echo $value["work"]; ?>
			NGAY LAM: <?php echo "$value[date_begin]";?>
		 	THOI GIAN LAM: <?php echo "$value[total_hour]";?>
			<a href=<?php echo "../todo_list/delete.php?id=" . $value['id']; ?>>DEL</a>
			<a href=<?php echo "../todo_list/update_view.php?id=" . $value['id'] . "&work=" . urlencode($value['work']) . "&date_begin=" . $value['date_begin'] . "&total_hour=" . $value['total_hour']; ?>>EDIT</a>
		</p>
	<?php }; ?>
 </body>
 </html>