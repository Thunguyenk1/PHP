<?php 
	require_once('config.php');

	function execute($sql) {
	//save data -> database (product)
	//B1. Mo ket noi toi database
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//B2. Thuc thi query (select, insert, update, delete)
	mysqli_query($conn, $sql);

	//B3. Dong ket noi database
	mysqli_close($conn);
}

function executeResult($sql) {
	//save data -> database (product)
	//B1. Mo ket noi toi database
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//B2. Thuc thi query (select, insert, update, delete)
	$data      = [];
	$resultset = mysqli_query($conn, $sql);
	while (($row = mysqli_fetch_array($resultset, 1)) != null) {
		$data[] = $row;
	}

	//B3. Dong ket noi database
	mysqli_close($conn);

	return $data;
}

function deleteStudent() {
		$id = $_POST('id');
		$sql = "delete from student where id = $id";
		execute($sql);

		echo "Xóa thành công";
	
}
 