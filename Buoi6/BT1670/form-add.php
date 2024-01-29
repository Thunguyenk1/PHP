<?php
require_once ('../db/dbhelper.php');

$name = $author = $price = $producer = '';

if (!empty($_POST)) {
	$name = getPOST('name');
	$author = getPOST('author');
	$price    = getPOST('price');
	$producer 	  =	getPOST('producer');

	if ($name != '' && $author != '' && $price != '') {
		//save user into database

		$sql = "insert into book (name , author , price , producer) values ('$name','$author', '$price' , '$producer')";
		// echo $sql;//SQL Injection
		execute($sql);

	}
}
?>
