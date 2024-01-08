<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT2837</title>
</head>
<body>
    <?php
        $random=mt_rand(3,15);
        echo "So tu nhien N la: $random<br/>";
        $dayso=[];
        for ($i = 0; $i < $random; $i++)
        {
            $dayso[$i]=mt_rand(3,15);
        }
        for ($i=0; $i <= $random ; $i++) 
        {
            $bookList [] =[
                'title' => 'title'.$i,
                'thumbnail' => 'thumbnail'.$i,
                'price' => $i.'.000VND',
            ];
        }
    ?>
    <div class="container">
        <table border="1">
            <thead>
                <tr>
                    <th>title</th>
                    <th>thumbnail</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $count = 0;
                    foreach ($bookList as $item) {
                        echo 
                        '<tr>
                            <td>'.$item['title'].'</td>
                            <td>'.$item['thumbnail'].''.'</td>
                            <td>'.$item['price'].'</td>		
                        </tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>