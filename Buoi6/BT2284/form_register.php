<?php
$fullname = $email = $password = $confirm_password = "";

if (!empty($_POST)) {
	$fullname         = $_POST['fullname'];
	$email            = $_POST['email'];
	$password         = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	if ($confirm_password == $password) {
		$sql = "insert into user (fullname, email, password) values ('$fullname', '$email', '$password')";
		execute($sql);

		header('Location: login.php');
		die();
	}
}