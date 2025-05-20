<?php

    session_start();
    echo "Welcome, {$username}!<br><br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Hashing</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="submit" name="logout" value="Log out">
    </form>
</body>
</html>

<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        session_destroy();
        header("Location: index.php");

    }

?>