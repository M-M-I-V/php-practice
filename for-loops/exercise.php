<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>
<body>
    <form action="exercise.php" method="POST">
        <label>Number to count to</label><br>
        <input type="text" name="counter"><br>
        <input type="submit" value="Start"><br>
    </form>
</body>
</html>

<?php

    $counter = $_POST["counter"];

    for($i = 1; $i <= $counter; $i++) {
        echo "Count: {$i}<br>"; 
    }

?>