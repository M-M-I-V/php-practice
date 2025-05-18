<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
    </title>
</head>
<body>
    <form action="exercise.php" method="POST">
        <input type="checkbox" name="languages[]" value="english">
        <label>English</label><br>
        <input type="checkbox" name="languages[]" value="spanish">
        <label>Spanish</label><br>
        <input type="checkbox" name="languages[]" value="french">
        <label>French</label><br>
        <input type="checkbox" name="languages[]" value="german">
        <label>German</label><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])) {
        $languages = $_POST["languages"];

        foreach($languages as $language) {
            if(isset($language)) {
                echo "You speak {$language}.<br>";
            } 
        }
    }

?>