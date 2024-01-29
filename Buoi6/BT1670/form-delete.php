<?php
require_once ('../db/dbhelper.php');

$username = '';

if (!empty($_POST)) {
	$username = getPOST('username');

	if ($username != '') {
		$sql = "delete from book where name = '$username'";
		execute($sql);
	}
}
?>