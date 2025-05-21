<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $name = "business";
    $connection = "";

    try {
        $connection = mysqli_connect($server, $username, $password, $name);

    } catch(mysqli_sql_exception) {
        echo "Error! Can't connect to the database";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Register</h2>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label>username</label>
        <input type="text" name="username"><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="register" value="Register"><br><br>
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $inputtedPassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)) {
            echo "Please input your username";

        } elseif(empty($inputtedPassword)) {
            echo "Please enter your password.";

        } else {
            $password = password_hash($inputtedPassword, PASSWORD_DEFAULT);

            $stmt = mysqli_prepare($connection, "INSERT INTO users(username, password) VALUES(?, ?)");
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);

            try {
              mysqli_stmt_execute($stmt);
              echo "Successful! User is now registered";
                
            } catch(mysqli_sql_exception $e) {
                echo "Error! Can't register user" . $e->getMessage();

            } finally {
                mysqli_stmt_close($stmt);
                mysqli_close($connection);

            }
        }
    }

?>