<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1591</title>
</head>
<body>
    <?php 
        $sum = 0;
        $i = rand(0,100);
        for ($x = 1; $x < $i; $x++){
            $sum += $x; 
        }
        echo "So Ngau Nhien: ".$i;
        echo "<br>";
        echo "Tong cac so tu 0 den $x la: ".$sum;
    ?>
</body>
</html>