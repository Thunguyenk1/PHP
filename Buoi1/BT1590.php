<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1590</title>
</head>
<body>
    <div class="container">
        <table border="1" class="table table-bordered">
            <tr>
                <th>Tên</th>
                <th>Tuổi</th>
                <th>Địa Chỉ</th>
                <th>Email</th>
                <th>SĐT</th>
            </tr>
            <tr>
                <?php
                    $name = "TRẦN VĂN ĐIỆP";
                    $age = "20";
                    $address = "NAM ĐỊNH";
                    $email = "gokisoft.com@gmail.com";
                    $phone = "0123456789";
                    echo "<td>$name</td>";
                    echo "<td>$age</td>";
                    echo "<td>$address</td>";
                    echo "<td>$email</td>";
                    echo "<td>$phone</td>";
                ?>
            </tr>
        </table>
    </div>
    
</body>
</html>