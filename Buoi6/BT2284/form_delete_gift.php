<?php
session_start();

require_once ('db/dbhelper.php');

if (!empty($_POST)) {
	$id  = $_POST['id'];
	$sql = "delete from gift where id = $id";
	execute($sql);

	header('Location: quantri.php');
	die();
}