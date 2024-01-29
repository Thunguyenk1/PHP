<?php 
	require_once('dbhelper.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student</title>
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
		<div class="panel-primary">
			<div class="panel-heading" style="margin-top: 20px">
				<h3>Quản lí thông tin sinh viên</h3> 
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="60px">STT</th>
							<th>Họ tên </th>
							<th>Tuổi</th>
							<th>Địa chỉ</th>
							<th width="60px"></th>
							<th width="60px"></th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$sql = 'select * from student';
							$studentList = executeResult($sql);
							$count = 1;
							foreach ($studentList as $std) {
								// code...
								echo '<tr>
									 	<td>'.($count++).'</td>
									 	<td>'.$std['fullname'].'</td>
									 	<td>'.$std['age'].'</td>
									 	<td>'.$std['address'].'</td>
									 	<td><button class="btn btn-warning" onclick=\'window.open("addstudent.php?id='.$std['id'].'", "_self")\'>Sửa</button></td>
									 	<td><button class="btn btn-danger" onclick="deleteStudent('.$std['id'].')">Xóa</button></td>
									 </tr>';
							}
						 ?>
					</tbody>
				</table>
				<a href="addstudent.php"><button class="btn btn-success" style="margin-top: 15px">
				Thêm sinh viên</button></a>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function deleteStudent(id) {
			option = confirm('Bạn có muốn xóa sinh viên này?')
			if(!option) return
				$.post('dbhelper.php', {
					'action': 'delete',
					'id': id
				}, function(data) {
					alert(data)
					location.reload()
				})

		}
	</script>
</body>
</html>


