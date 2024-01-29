<?php
$fullname = $email = $password = $confirm_password = "";

if (!empty($_POST)) {
	$email    = $_POST['email'];
	$password = $_POST['password'];

	$sql    = "select * from user where email = '$email' and password = '$password'";
	$result = executeResult($sql);

	if (count($result) > 0) {
		//login thanh cong
		$_SESSION['user'] = $result[0];

		header("Location: quantri.php");
		die();
	}
}