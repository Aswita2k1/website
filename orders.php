<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Orders</title>
    <style>
        .single_order table{
            width: 100%;
        }
        .single_order table td{
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="orders_wrapper">
        <h1>Your Orders</h1>
        <hr>
        <div class="orders">
            <div class="single_order">
                <table>
                    <tr>
                        <td>Products</td>
                        <td>Price</td>
                        <td>Delivery Method</td>
        </tr>
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM `orders`");
                    foreach($result as $res){
                    ?>
                    <tr>
                        <td><?= $res['products']?></td>
                        <td><?= $res['price']?></td>
                        <td><?= $res['delivery_method']?></td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
        <br>
        <a href="/">&leftarrow; Back to Home</a>
    </div>
</body>
</html>