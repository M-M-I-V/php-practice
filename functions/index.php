<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label>username</label>
        <input type="text"
        name="username"><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in"><br><br>
    </form>
</body>
</html>

<?php

    function greetUser($username) {
        echo "Hello, {$username}!<br>";
        echo "Thank you for using our product";
    }

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)) {
            echo "Please input your username";

        } elseif(empty($password)) {
            echo "Please input your password";

        } else {
            greetUser($username);

        }
    }

?>