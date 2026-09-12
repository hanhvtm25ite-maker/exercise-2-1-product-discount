<?php
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];

$discount = $list_price * $discount_percent * 0.01;
$discount_price = $list_price - $discount;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span>
            <?php echo htmlspecialchars($product_description); ?>
        </span><br>

        <label>List Price:</label>
        <span>
            <?php echo htmlspecialchars('$' . number_format($list_price, 2)); ?>
        </span><br>

        <label>Standard Discount:</label>
        <span>
            <?php echo htmlspecialchars(number_format($discount_percent, 1) . '%'); ?>
        </span><br>

        <label>Discount Amount:</label>
        <span>
            <?php echo '$' . number_format($discount, 2); ?>
        </span><br>

        <label>Discount Price:</label>
        <span>
            <?php echo '$' . number_format($discount_price, 2); ?>
        </span><br>
    </main>
</body>
</html>