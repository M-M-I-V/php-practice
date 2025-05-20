<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "business";
    $db_connection = "";

    try {
        $db_connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);
        echo "Connected!";

    } catch(mysqli_sql_exception) {
        echo "Can't connect to the database.";

    }

?>