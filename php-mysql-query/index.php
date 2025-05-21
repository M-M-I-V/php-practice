<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL query using PHP</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h3>Register</h3>
        <label>username</label>
        <input type="text" name="username"><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Submit"><br><br>
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $db_server = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "business";
        $db_connection = "";

        try {
            $db_connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);
            echo "Connected!<br>";

        } catch(mysqli_sql_exception) {
            echo "Can't connect to the database.";

        }

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $inputtedPassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = password_hash($inputtedPassword, PASSWORD_DEFAULT);

        $stmt = mysqli_prepare($db_connection, "INSERT INTO users(username, password) VALUES(?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        
        try {
            mysqli_stmt_execute($stmt);
            echo "Successful! User is now registered.";

        } catch(mysqli_sql_exception $e) {
            echo "Error! Couldn't register user: " . $e->getMessage();

        } finally {
            mysqli_stmt_close($stmt);
            mysqli_close($db_connection);
        }
    }

?>