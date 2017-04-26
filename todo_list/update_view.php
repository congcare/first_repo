<form method="POST" action=<?php echo "./update.php?id=" . $_GET['id']?>>
	<label for="edit work">edit work:</label>
	<input type="text" name="work" id="edit work" value="<?php echo $_GET['work']?>"><br>
	<label for="edit date_begin">edit date_begin:</label>
	<input type="text" name="date_begin" id="edit date_begin" value="<?php echo $_GET['date_begin']?>"><br>
	<label for="edit total_hour">edit total_hour:</label>
	<input type="text" name="total_hour" id="edit total_hour" value="<?php echo $_GET['total_hour']?>"><br>
	<button type="submit"> EDIT</button>
</form>