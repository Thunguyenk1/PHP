<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1636</title>
</head>
<body>
    <?php
        $random=mt_rand(0,100);
        echo "Mang ngau nhien : $random<br/>";
        $dayso=[];
        for ($i=0; $i <$random ; $i++) { 
            $dayso[$i]=mt_rand(0,100);
        }
        echo "<br/>Mang sau khi duoc sap xep : <br/> ";
        for ($i=0; $i < count($dayso); $i++) { 
            echo $dayso[$i] . " ";
        }
    ?>
</body>
</html>