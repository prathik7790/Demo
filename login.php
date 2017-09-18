<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Know your Gadget</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div>
		<ul>
			<a href="index.html"><li>Home</li></a>
			<a href="register.html"><li>Register</li></a>
			<a href="login.php"><li>Login</li></a>
			<a href="contact.html"><li>Contact us</li></a>
		</ul>
	</div>
	<div class="website-title">
		Welcome to the Know your Gadget
	</div>
	<div class="form-wrapper">
		<form method="post" action="userlogin.php">
			<input type="text" name="loginname" placeholder="User name" class="input-area" required>
			<br>
			<input type="password" name="loginpassword" placeholder="**********" class="input-area" required>
			<br>
			<input type="submit" value="login" class="submit">
		</form>
	</div>
	<footer>&copy 2016. All rights Reserved.</footer>
	<script type="text/javascript" src="js/validate.js"></script>
</body>
</html>