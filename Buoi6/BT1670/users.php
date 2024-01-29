<?php
require_once ('../db/dbhelper.php');
require_once ('form-add.php');
// $user = valiToken();
if ($user == null) {
	header('Location: login.php');
	die();
}
$sql      = "select * from book";
$bookList = executeResult($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Users Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>


	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Users Page - <?=$user['username']?>(<a href="logout.php">logout</a>)</h2>
			</div>
			<div class="panel-body">
				<div class="bs-example">
    <div class="accordion" id="accordionExample">


        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">1. thêm sách</button>									
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">


                    <form method="post" id="RegisterForm">
					<div class="form-group">
					  <label for="name">name:</label>
					  <input required="true" type="text" class="form-control" id="name" name="name">
					</div>
					<div class="form-group">
					  <label for="author">author:</label>
					  <input required="true" type="text" class="form-control" id="author" name="author">
					</div>
					<div class="form-group">
					  <label for="price">price:</label>
					  <input required="true" type="number" class="form-control" id="price" name="price">
					</div>
					<div class="form-group">
					  <label for="producer">producer:</label>
					  <input required="true" type="text" class="form-control" id="producer" name="producer">
					</div>
					<button class="btn btn-success">add</button>
				</form>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">2. quản lý sách</button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                                   
	<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>tên sách</th>
							<th>tác giả</th>
							<th>giá bán</th>
							<th>nhà sản xuất</th>
							<th style="width: 50px;"></th>
							<th style="width: 50px;"></th>
						</tr>
					</thead>
					<tbody>
<?php
$count = 0;
foreach ($bookList as $item) {
	echo '<tr>
			<td>'.(++$count).'</td>
			<td>'.$item['name'].'</td>
			<td>'.$item['author'].'</td>
			<td>'.$item['price'].'</td>
			<td>'.$item['producer'].'</td>
			<td><button class="btn btn-warning">Edit</button></td>
			<td><button class="btn btn-danger" onclick="deleteUsers(\''.$item['name'].'\')">Delete</button></td>
		</tr>';
}
?>
					</tbody>
				</table>



                                   
                </div>
            </div>
        </div>


        

    </div>
</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	function deleteUsers(username) {
		option = confirm('Are you sure to delete this user?')
		if(!option) return

		$.post('form-delete.php', {
			'username': username
		}, function(data) {//callback -> khi du lieu dc tra ve tu server
			location.reload() //load website -> khong load cung dc -> su dung jquery de update data -> tuy vao nghiep cua du an.
		})
	}
</script>
</body>
</html>