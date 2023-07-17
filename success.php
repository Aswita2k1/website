<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placed</title>
</head>
<body>
    <center>
        <h1>Order placed</h1>
        <p>You've successfully placed an order!</p>
        <a href="/">< Return to Home</a>
    </center>
    <script>
        localStorage.removeItem('cartData');
    </script>
</body>
</html>