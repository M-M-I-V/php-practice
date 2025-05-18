<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>
<body>
    <form action="exercise.php" method="POST">
        <label>Product</label><br>
        <input type="text" name="product"><br>
        <label>Price</label><br>
        <input type="text" name="price"><br>
        <label>Quantity</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="Submit Order"><br>
    </form>
</body>
</html>

<?php

    $product = $_POST["product"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $total = $price * $quantity;

    if($price < 0) {
        echo "Invalid price.";

    } elseif($quantity < 0) {
        echo "Invalid quantity.";

    } else {
        echo "Product: {$product}<br>";
        echo "Total: {$total}";
        
    }

?>