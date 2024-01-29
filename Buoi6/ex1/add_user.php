<?php
    $fullname = $email = $phoneNumber = $address = "";

    if(!empty($_POST)) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phone_number'];
        $address = $_POST['address'];
    }
    $mydate = date('Y-m-d H:i:s');

    $conn = mysqli_connect('localhost:3306', 'root', '', 'php');
    mysqli_set_charset($conn, 'utf8');

    $sql = "insert into danhsachnguoidung (fullname, email, phoneNumber, address)
        values('$fullname', '$email', '$phoneNumber', '$address')";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
?>  