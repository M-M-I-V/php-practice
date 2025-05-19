<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even</title>
</head>
<body>
    <h3>Odd or Even</h3>
    <form action="exercise.php" method="POST">
        <label>Input a number</label>
        <input type="text" name="number"><br>
        <input type="submit" name="submit"><br><br>
    </form>
</body>
</html>

<?php

    function oddOrEven(int $number) {
        if($number % 2 == 0) {
            return "{$number} is even.";

        } else {
            return "{$number} is odd.";

        }
    }

    if(isset($_POST["submit"])) {
        $number = $_POST["number"];

        if(empty($number)) {
            echo "Please input a number.";

        } elseif($number < 0) {
            echo "Please input a positive number.";

        } else {
            $result = oddOrEven($number);
            echo $result;

        }
    }

?>