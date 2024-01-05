<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1592</title>
</head>
<body>
    <?php 
        $n = rand(1,100);
        echo "So ngau nhien la: $n";
        echo "<br/>";
        for ($i=1; $i <= $n ; $i++) { 
            for ($j=0; $j < $i; $j++) { 
                echo " * ";
            }
                echo "</br>";		
        }
    ?>
</body>
</html>