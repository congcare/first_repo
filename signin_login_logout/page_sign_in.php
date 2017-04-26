<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	.error {color: #FF0000;}
	</style>
</head>
<body>
<h2>DANG KY</h2>
<form method="post" action="validate.php">
	USERNAME: 
	<input type="username" name="username" value="<?php echo $userName;?>"><span class="error">* <?php echo $error['userNameErr'];?></span><br>
	PASSWORD: 
	<input type="password" name="password" value="<?php echo $password;?>"><span class="error">* <?php echo $error['passwordErr'];?></span><br>
	EMAIL:
	<input type="email" name="email" value="<?php echo $email ;?>"><span class="error">* <?php echo $error['emailErr'];?></span><br>
	<button type="submit">Dang Ky</button>
</form>
</body>
</html>

