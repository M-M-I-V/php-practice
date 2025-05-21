<?php

    include("../mysqli/database.php");

    $query = "SELECT * FROM users";
    $result = mysqli_query($db_connection, $query);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["id"] . "<br>";
            echo $row["username"] . "<br>";
            echo $row["registration_date"] . "<br><br>";

        }

    } else {
        echo "No results found";

    }

?>