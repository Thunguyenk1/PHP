<?php
$title = $thumbnail = $content = $price = "";

if (!empty($_POST)) {
	$id         = $_POST['id'];
	$title      = $_POST['title'];
	$thumbnail  = $_POST['thumbnail'];
	$content    = $_POST['content'];
	$price      = $_POST['price'];
	$id_user    = $_SESSION['user']['id'];
	$created_at = $updated_at = date('Y-m-d H:i:s');

	if ($confirm_password == $password) {
		if ($id > 0) {
			$sql = "update gift set title = '$title', thumbnail = '$thumbnail', content = '$content', price = '$price', updated_at = '$updated_at' where id = $id";
		} else {
			$sql = "insert into gift (title, thumbnail, content, price, id_user, created_at, updated_at) values ('$title', '$thumbnail', '$content', '$price', '$id_user', '$created_at', '$updated_at')";
		}

		execute($sql);

		header('Location: quantri.php');
		die();
	}
}

$id = '0';
if (isset($_GET['id'])) {
	$id     = $_GET['id'];
	$sql    = "select * from gift where id = ".$id;
	$result = executeResult($sql);
	if (count($result) > 0) {
		$title     = $result[0]['title'];
		$thumbnail = $result[0]['thumbnail'];
		$content   = $result[0]['content'];
		$price     = $result[0]['price'];
	} else {
		$id = '0';
	}
}