<?php 
	// require_once('formStudent.php');
require_once ('dbhelper.php');
$fullname = $age = $address = '';
if(!empty($_POST)) {
	$id = '';

	if (isset($_POST['fullname'])) {
		// code...
		$fullname = $_POST['fullname'];
	}

	if (isset($_POST['age'])) {
		// code...
		$age = $_POST['age'];
	}

	if (isset($_POST['address'])) {
		// code...
		$address = $_POST['address'];
	}

	if (isset($_POST['id'])) {
		// code...
		$id = $_POST['id'];
	}
	$fullname =str_replace('\'', '\\\'', $fullname);
	$age =str_replace('\'', '\\\'', $age);
	$address =str_replace('\'', '\\\'', $address);
	$id =str_replace('\'', '\\\'', $id);

	if ($id != '') {
		// code...
		$sql = 
		"update student set fullname = '$fullname', age = '$age', address = '$address' where id =".$id;
	} else {
		$sql = "insert into student(fullname, age, address) values ('$fullname', '$age', '$address')";
	}
 
	// echo($sql);
	execute($sql);
	header('Location: student.php');
}
$id = '';
if (isset($_GET['id'])) {
	// code...
	$id = $_GET['id'];
	$sql = 'select * from student where id = '.$id;
	$studentList = executeResult($sql);
	if ($studentList != null && count($studentList)>0 ) {
		// code...
		$std = $studentList[0];
		$fullname = $std['fullname'];
		$age = $std['age'];
		$address = $std['address'];
	} else {
		$id = '';
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
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
				<h2 class="text-center">Nhập thông tin sinh viên</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
						<label for="usr">Họ Tên:</label>
						<input type="number" name="id" value="<?=$id?>" style="display: none;">
						<input required="true" type="text" class="form-control" id="fullname" name="fullname" value="<?=$fullname?>">
					</div>
					<div class="form-group">
						<label for="usr">Tuổi:</label>
						<input required="true" type="number" class="form-control" id="age" name="age" value="<?=$age?>">
					</div>
					<div class="form-group">
						<label for="address">Địa chỉ:</label>
						<input type="text" class="form-control" id="address" name="address" value="<?=$address?>">
					</div>

					<a href="student.php"><button type="button" class="btn btn-danger">Danh sách sinh viên</button></a>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>