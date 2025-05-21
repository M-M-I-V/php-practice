<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL query using PHP</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h3>Register</h3>
        <label>username</label>
        <input type="text" name="username">
        <label>password</label>
        <input type="password" name="password">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $inputtedPassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = password_hash($inputtedPassword, PASSWORD_DEFAULT);

        include("../mysqli/database.php");

        $query = "INSERT INTO users(user, password) VALUES('$username', '$password')";
        
        try {
            mysqli_query($connection, $query);

        } catch(mysqli_sql_exception) {
            echo "Error!";

        }
    }

?>