<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>
<body>
    <form action="exercise.php" method="POST">
        <input type="text" name="education_level" value="Elementary School">
        label>Elementary School</label><br>
        <input type="text" name="education_level" value="High School">
        <label>High School</label><br>
        <input type="text" name="education_level" value="College">
        <label>College</label><br>
        <input type="submit" name="submit" value="Submit"><br>
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])) {
        $education_level = $_POST["education_level"];

        switch($education_level) {
            case "Elementary School":
                echo "You selected Elementary School.";
                break;

            case "High School":
                echo "You selected High School.";
                break;

            case "College":
                echo "You selected College.";
                break;

            default:
                echo "Please select an education level.";
                break;
        }
    }