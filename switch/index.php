<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label>Grade</label><br>
        <input type="text" name="grade"><br>
        <input type="submit" value="Submit Grade"><br>
    </form>
</body>
</html>

<?php

    $grade = $_POST["grade"];
    $grade = strtoupper($grade);
 
    switch($grade) {
        case "A":
            echo "Excellent!";
            break;
        
        case "B":
            echo "Good job!";
            break;

        case "C":
            echo "Well done!";
            break;

        case "D":
            echo "You passed.";
            break;

        case "F":
            echo "Better try again.";
            break;

        default:
            echo "{$grade} is not a valid grade";
            break;
    }

?>