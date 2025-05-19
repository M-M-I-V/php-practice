<?php

    session_start();

    echo "Welcome, {$_SESSION["username"]}<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <form action="home.php" method="GET">
        <input type="submit" name="logout" value="Log out">
    </form>
</body>
</html>

<?php

    if(isset($_GET["logout"])) {
        session_destroy();
        header("Location: index.php");

    }

?>