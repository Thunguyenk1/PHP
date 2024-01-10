<?php
$name = $username = $pwd = '';

if(!empty($_POST)){
	$username = $_POST['username'];
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];

	echo 'Username: ';
	echo $username;
	echo '</br>';

	echo 'Email: ';
	echo $name;
	echo '</br>';

	echo 'Password: '.$pwd;
	echo '</br>';
}
?>