<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="checkbox" name="foods[]" value="Pizza">
        <label>Pizza</label><br>
        <input type="checkbox" name="foods[]" value="Burger">
        <label>Burger</label><br>
        <input type="checkbox" name="foods[]" value="Pasta">
        <label>Pasta</label><br>
        <input type="checkbox" name="foods[]" value="Salad">
        <label>Salad</label><br>
        <input type="checkbox" name="foods[]" value="Sushi">
        <label>Sushi</label><br>
        <input type="submit" name="submit" value="submit"><br>
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])) {
        $foods = $_POST["foods"];

        foreach($foods as $food) {
            if(isset($food)) {
                echo "You like {$food}.<br>";
            } 
        }
    }

?>