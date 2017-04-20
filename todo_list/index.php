<form method="POST" action="./add.php">
	<label for="lw">add work:</label>
	<input type="text" name="work" id="lw"><br>
	<label for="ld">add date_begin:</label>
	<input type="text" name="date_begin" id="ld"><br>
	<label for="lh">add total_hour:</label>
	<input type="text" name="total_hour" id="lh"><br>
	<button type="submit"> ADD</button>
</form>

<a href="select.php">XEM TOAN BO</a><br><br><br>


<form method="POST" action=<?php echo "./update.php?id=" . $_GET['id']?>>
	<label for="elw">edit work:</label>
	<input type="text" name="works" id="elw" value="<?php echo $_GET['work']?>"><br>
	<label for="eld">edit date_begin:</label>
	<input type="text" name="date_begins" id="eld" value="<?php echo $_GET['date_begin']?>"><br>
	<label for="elh">edit total_hour:</label>
	<input type="text" name="total_hours" id="elh" value="<?php echo $_GET['total_hour']?>"><br>
	<button type="submit"> EDIT</button>
</form>
