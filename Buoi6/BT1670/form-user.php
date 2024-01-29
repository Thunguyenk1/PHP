<?php
require_once ('../db/dbhelper.php');

$username = $password = $email = $phone = $account = '';

if (!empty($_POST)) {
	$username = getPOST('username');
	$password = getPOST('password');
	$email    = getPOST('email');
	$phone 	  =	getPOST('phone');
	$account  = getPOST('account');

	if ($username != '' && $password != '' && $email != '') {
		//save user into database
		$password = getPwdSecurity($password);

		$sql = "insert into users (account , username , phone , email, password ) values ('$account','$username', '$phone' , '$email' , '$password')";
		// echo $sql;//SQL Injection
		execute($sql);

		//chuyen sang trang login.php
		header('Location: login.php');
		die();
	}
}
?>
