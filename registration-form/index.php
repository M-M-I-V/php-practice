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