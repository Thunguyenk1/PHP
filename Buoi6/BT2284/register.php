<?php
session_start();

require_once ('db/dbhelper.php');
require_once ('form_register.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>

	<style type="text/css">
		.main {
			width: 640px;
			margin: 0px auto;
		}
	</style>
</head>
<body>
	<div class="main">
		<h1 style="text-align: center;">Register Form</h1>
		<form method="post">
			<label>Full Name: </label>
			<input required="true" type="text" name="fullname" style="width: 100%;" placeholder="Enter full name">
			<br/><br/>
			<label>Email: </label>
			<input required="true" type="email" name="email" style="width: 100%;" placeholder="Enter email">
			<br/><br/>
			<label>Password: </label>
			<input required="true" type="password" name="password" style="width: 100%;" placeholder="Enter password">
			<br/><br/>
			<label>Confirm Password: </label>
			<input required="true" type="password" name="confirm_password" style="width: 100%;" placeholder="Enter confirm password">
			<br/><br/>
			<p>
				<a href="login.php">I have a account</a>
			</p>
			<button type="submit">Register</button>
		</form>
	</div>
</body>
</html>