<?php
require_once ('../db/dbhelper.php');

$account = $password = '';

if (!empty($_POST)) {
	$account = getPOST('account');
	$password = getPOST('password');

	if ($account != '' && $password != '') {
		//save user into database
		$password = getPwdSecurity($password);

		$sql   = "select * from users where account = '$account' and password = '$password'";
		$users = executeResult($sql);
 
		if ($users != null && count($users) > 0) {
			//login successfully
			$token = getPwdSecurity(time().$users[0]['email']);
			setcookie('token', $token, time()+7*24*60*60, '/');

			$sql = "update users set token = '$token' where username = '".$users[0]['username']."'";
			execute($sql);
			 
			//chuyen sang trang users.php
			header('Location: users.php');
			die();
		}
	}
}
?>