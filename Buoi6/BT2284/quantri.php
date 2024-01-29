<?php
session_start();

require_once ('db/dbhelper.php');

$sql    = "select gift.*, user.fullname from gift left join user on gift.id_user = user.id";
$result = executeResult($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gift Page</title>

	<style type="text/css">
		.main {
			width: 640px;
			margin: 0px auto;
		}
	</style>
</head>
<body>
	<div class="main">
		<h1 style="text-align: center;">Gift Page</h1>
		<a href="gift_editor.php"><button>Add new gift</button></a>
		<table border="1" cellspacing="3" cellpadding="3" style="width: 100%;margin-top: 10px;">
			<thead>
				<tr>
					<th>No</th>
					<th>Title</th>
					<th>Price</th>
					<th>Updated At</th>
					<th>Created By</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php
$count = 0;
foreach ($result as $item) {
	echo '<tr>
					<td>'.(++$count).'</td>
					<td>'.$item['title'].'</td>
					<td>'.$item['price'].'</td>
					<td>'.$item['updated_at'].'</td>
					<td>'.$item['fullname'].'</td>
					<td><a href="gift_editor.php?id='.$item['id'].'"><button>Edit</button></a></td>
					<td>
						<form method="post" action="form_delete_gift.php" onsubmit="return confirmDelete();">
							<input type="text" name="id" style="width: 100%;" placeholder="Enter id" value="'.$item['id'].'" hidden>
							<button>Delete</button>
						</form>
					</td>
				</tr>';
}
?>
			</tbody>
		</table>
	</div>
<script type="text/javascript">
	function confirmDelete() {
		option = confirm('Ban chac chan muon xoa gift nay ko?')
		if(!option) return false
		return true
	}
</script>
</body>
</html>