<?php
require_once('querySql.php');

$username = $email = $password = "";
if (!empty($_POST)) {
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }

    //Kiem tra dieu kien dang ky thanh cong
    if (!empty($username) && !empty($password)) {
        $sql = "insert into users(username, email, PASSWORD) values ('$username', '$email', '$password')";

        querySql($sql);
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item active">input information</li>
            <li class="list-group-item">
                <form method="post">
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" id="usr" name="username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password">
                    </div>
                    <button type="submit" class="btn btn-success">Register</button>
                </form>
            </li>
        </ul>
    </div>
</body>

</html>