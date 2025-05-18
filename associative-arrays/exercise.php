<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>
<body>
    <form action="exercise.php" method="POST">
        <label>Country</label>
        <input type="text" name="country">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php

    $capitals = array(
        "Philippines" => "Manila",
        "USA" => "Washington, D.C.",
        "Japan" => "Tokyo",
        "South Korea" => "Seoul",
        "Singapore" => "Singapore",
        "India" => "New Delhi",
    );

    $country = $_POST["country"];
    $capital = $capitals[$country];

    echo "The capital of {$country} is {$capital}.<br>";

?>