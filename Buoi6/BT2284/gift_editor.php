<?php
session_start();

require_once ('db/dbhelper.php');
require_once ('form_gift.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gift Editor Page</title>

	<style type="text/css">
		.main {
			width: 640px;
			margin: 0px auto;
		}
	</style>
</head>
<body>
	<div class="main">
		<h1 style="text-align: center;">Gift Editor</h1>
		<form method="post">
			<label>Title: </label>
			<input type="text" name="id" style="width: 100%;" placeholder="Enter id" value="<?=$id?>" hidden>
			<input required="true" type="text" name="title" style="width: 100%;" placeholder="Enter title" value="<?=$title?>">
			<br/><br/>
			<label>Thumbnail: </label>
			<input required="true" type="text" name="thumbnail" style="width: 100%;" placeholder="Enter thumbnail" value="<?=$thumbnail?>">
			<br/><br/>
			<label>Price: </label>
			<input required="true" type="number" name="price" style="width: 100%;" placeholder="Enter price" value="<?=$price?>">
			<br/><br/>
			<label>Content: </label>
			<textarea name="content" rows="5" style="width: 100%;"><?=$content?></textarea>

			<button type="submit">Save</button>
		</form>
	</div>
</body>
</html>