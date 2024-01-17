<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>Input product's details information</h2>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for=""><b>Product Name</b></label>
                    <input class="form-control" type="text" name="product_name">
                </div>
                <div class="form-group">
                    <label for=""><b>Category Name</b></label>
                    <select class="form-control" name="category_name" id="">
                        <option value="">Iphone</option>
                        <option value="">Sam Sung</option>
                        <option value="">Nokia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for=""><b>Price</b></label>
                    <input class="form-control" type="number" name="price">
                </div>
                <div class="form-group">
                    <label for=""><b>Quantity</b></label>
                    <input class="form-control" type="number" name="quantity">
                </div>
                <div class="form-group">
                    <label for=""><b>Total Price</b></label>
                    <input class="form-control" type="number" name="total_price">
                </div>
                <div style="margin: 10px" class="form-group">
                    <label for=""></label>
                    <button style="margin: 10px" type="submit" class="btn btn-success">Add Product</button>
                    <button style="margin: 10px" type="reset" class="btn btn-success">Reset</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Management Products</h2>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <table border="1" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Quantity</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>A</td>
                            <td>Phone</td>
                            <td>10</td>
                            <td>25</td>
                            <td>
                                <button type="button" class="btn btn-warning">Edit</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>
</html>