<?php
if (!empty($_POST)) {
	require_once ('db/dbhelper.php');
	createDB();

	$sql = "create table if not exists user (
		id int primary key auto_increment,
		fullname varchar(50),
		email varchar(150),
		password varchar(32),
		token varchar(32)
	)";

	execute($sql);

	$sql = "create table if not exists gift (
		id int primary key auto_increment,
		title varchar(200) not null,
		thumbnail varchar(500),
		content longtext,
		price float,
		created_at datetime,
		updated_at datetime,
		id_user int references user (id)
	)";

	execute($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Init Page</title>
</head>
<body>
	<h1 style="text-align: center;">Init Database</h1>
	<center>
		<form method="post">
			<button name="action" value="init">Start Init Database</button>
		</form>
	</center>
</body>
</html>