<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter and Validate</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label>username</label>
        <input type="text" name="username"><br>
        <label>age</label>
        <input type="text" name="age"><br>
        <label>email</label>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="Log in"><br><br>
    </form>
</body>
</html>

<?php

    if(isset($_POST["login"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        /* $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL) */

        echo "username: {$username}<br>";
        echo "age: {$age}<br>";
        echo "email: {$email}<br>";

        /* if(empty($age)) {
            echo "Please enter a valid age.";

        } elseif(empty($email)) {
            echo "Please enter a valid email.";

        } else {
            echo "username: {$username}<br>";
            echo "age: {$age}<br>";
            echo "email: {$email}<br>";

        } */
    }

?>