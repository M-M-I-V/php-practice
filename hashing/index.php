<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <label>username</label>
        <input type="text" name=""><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in"><br><br>
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $inputedPassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $storedPassword = "password123";
        $hashedPassword = password_hash($storedPassword, PASSWORD_DEFAULT);

        if(!empty($username) && !empty($inputedPassword)) {
            if(password_verify($inputedPassword, $hashedPassword)) {
            header("Location: home.php");

            } else {
                echo "Incorrect username or password.";

            }
            
        } else {
            echo "Please input your username or password";

        }
    }

?>