
<?php
    if (!empty($_POST)) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(!empty($email)){
            $emailCookie = '';
            if(isset($_COOKIE['email'])){
                $emailCookie = $_COOKIE['email'];
            }
            $passwordCookie = '';
            if(isset($_COOKIE['password'])){
                $passwordCookie = $_COOKIE['password'];
            }
            if($email == $emailCookie && $password == $passwordCookie){
                header('Location: welcome.php');
                die();
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card-header">
            <h2>Trang Đăng Ký</h2>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Họ Tên: </label>
                    <input type="text" class="form-control" placeholder="Nhập họ và tên" name="fullname">
                </div>
                <div class="form-group">
                    <label for="">Email: </label>
                    <input type="text" class="form-control" placeholder="Nhập email" name="email">
                </div>
                <div class="form-group">
                    <label for="">Mật Khẩu: </label>
                    <input type="text" class="form-control" placeholder="Nhập mật khẩu" name="password">
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ: </label>
                    <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address">
                </div>
                <br />
                <div class="form-group">
                    <label for=""></label>
                    <button type="submit" class="btn btn-success">Đăng Ký</button>
                </div>
            </form>
            
        </div>
    </div>
</body>
</html>