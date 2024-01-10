<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT3331</title>
</head>
<body>
    <?php
        $so_ngau_nhien=mt_rand(2,10);
        echo "So ngau nhien N la: $so_ngau_nhien<br/>";
        $dayso=[];
        for($i=0;$i< $so_ngau_nhien;$i++){
            $dayso[$i]=mt_rand(2,10);
        }
        for ($i=0; $i <= $so_ngau_nhien ; $i++) 
        {
            $sach [] =[
                'title' => 'tên sách'.$i,
                'author' => 'tác giả'.$i,
                'price' => $i.'.000VND',
                'nsx' => $i.'ngay san xuat',
            ];
        }
    ?>
    <div class="container">
        <table border="1">
            <thead>
                <tr>
                    <th>tên sách</th>
                    <th>tác giả</th>
                    <th>giá bán</th>
                    <th>ngày sản xuất</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $index =0;
                    foreach ($sach as $item) {
                        echo 
                        '<tr>
                            <td>'.$item['title'].'</td>
                            <td>'.$item['author'].''.'</td>
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