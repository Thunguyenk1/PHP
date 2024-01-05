<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1635</title>
</head>
<body>
    <?php
        $N = rand(1,100);
        $QuyenSach= [];
        echo "So Ngau Nhien N la: $N";
        echo "<br>";
        for ($i=1; $i <= $N ; $i++) {
            $QuyenSach[] =[
                'title' => 'quyển sách '.$i,
                'authorname' => 'tác giả '.$i,
                'price' => rand(1,100),
                'nsx' => 'nhà xuất bản '.$i,
                
            ];
        }
    ?>
    <div class="container">
        <table border="1" class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ten</th>
                    <th>Tác giả</th>
                    <th>Giá</th>
                    <th>Nhà Sản Xuất</th>				
                </tr>
            </thead>
            <tbody>
                <?php
                    $count = 0;
                    foreach ($QuyenSach as $item) {
                        echo 
                        '<tr>
                            <td>'.(++$count).'</td>
                            <td>'.$item['title'].'</td>
                            <td>'.$item['authorname'].''.'</td>
                            <td>'.$item['price'].'</td>
                            <td>'.$item['nsx'].'</td>			
                        </tr>';
                    }
                ?>
            </tbody>
	    </table>
    </div>
</body>
</html>