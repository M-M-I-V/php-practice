<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label>username</label>
        <input type="text" name="username"><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in"><br><br>
    </form>
</body>
</html>

<?php

    $storedPassword = "password123";
    $hashedPassword = password_hash($storedPassword, PASSWORD_DEFAULT);

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $_SESSION["username"] = $username;
        $inputtedPassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(!empty($username) && !empty($inputtedPassword)) {
            if(password_verify($inputtedPassword, $hashedPassword)) {
                header("Location: home.php");
                exit();

            } else {
                echo "Incorrect username or password.";

            }

        } else {
            echo "Please input your username or password";

        }
    }

?>