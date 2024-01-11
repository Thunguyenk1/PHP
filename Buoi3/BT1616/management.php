<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Welcome to PHP tutorial</h1>
        <div class='card-header bg-primary'>
            <h2>Management</h2>
        </div>
        <div class="card-body">
            <table border="1" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                        <?php
                            // $query  = 'select * from student';
                            // $result = select($query);

                            // for ($i = 0; $i < count($result); $i++) {
                            //     echo '<tr>
                            //                 <td>'.($i+1).'</td>
                            //                 <td>'.$result[$i]['username'].'</td>
                            //                 <td>'.$result[$i]['email'].'</td>
                            //                 <td>'.$result[$i]['password'].'</td>
                            //             </tr>';
                            // }
                        ?>
                </thead>
            </table>
        </div>
    </div>