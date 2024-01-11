<?php
    include_once('management.php');

    $uname = $email = $password = '';
    if (isset($_POST['name'])) {
        $uname = $_POST['name'];
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }

    echo $uname.'-'.$email. ' - '.$password;
?>

        <div class="container">
            <div class='card-header bg-primary'>
                <h2>Input detailt information</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group" style="margin: 10px 0px">
                        <label>User Name</label>
                        <input type="text" name="name" value="" class="form-control">
                    </div>
                    <div class="form-group" style="margin: 10px 0px">
                        <label>Email</label>
                        <input type="email" name="email" value="" class="form-control">
                    </div>
                    <div class="form-group" style="margin: 10px 0px">
                        <label>Password</label>
                        <input type="password" name="password" value="" class="form-control">
                    </div>
                    <div class="form-group" style="margin: 10px 0px">
                        <label></label>
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>
    
    </body>
</html>