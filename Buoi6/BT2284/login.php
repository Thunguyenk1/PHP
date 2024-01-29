<?php
session_start();

require_once ('db/dbhelper.php');
require_once ('form_login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

	<style type="text/css">
		.main {
			width: 640px;
			margin: 0px auto;
		}
	</style>
</head>
<body>
	<div class="main">
		<h1 style="text-align: center;">Login Form</h1>
		<form method="post">
			<label>Email: </label>
			<input required="true" type="email" name="email" style="width: 100%;" placeholder="Enter email">
			<br/><br/>
			<label>Password: </label>
			<input required="true" type="password" name="password" style="width: 100%;" placeholder="Enter password">
			<br/><br/>
			<p>
				<a href="login.php">Create a new account</a>
			</p>
			<button type="submit">Login</button>
		</form>
	</div>
</body>
</html>