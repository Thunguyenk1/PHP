<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form resgister</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card-header bg-primary">
            <h2>Input detailt information</h2>
            
        </div>
        <div class="card-body">
            <form method="post" action="welcome.php">
                    <div class="form-group">
                        <label style="margin: 10px 0px 10px 0px;">User Name</label>
                        <input required="true" class="form-control" type="text" placeholder="" name="username">
                    </div>
                    <div class="form-group">
                        <label style="margin: 10px 0px 10px 0px;">Email</label>
                        <input required="true" class="form-control" type="email" placeholder="" name="name">
                    </div>
                    <div class="form-group">
                        <label style="margin: 10px 0px 10px 0px;">Password</label>
                        <input required="true" class="form-control" type="password" placeholder="" name="pwd">
                    </div>
                    <button style="margin-top: 10px;" class="btn btn-success" type="submit">Register</button>
                </form>
        </div>
    </div>
</body>
</html>