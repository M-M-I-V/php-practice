<?php

    $capitals = array(
        "Philippines" => "Manila",
        "USA" => "Washington, D.C.",
        "Japan" => "Tokyo",
        "South Korea" => "Seoul",
        "Singapore" => "Singapore",
        "India" => "New Delhi",
    );

    foreach($capitals as $key => $value) {
        echo "The capital of {$key} is {$value}.<br>";
    }

?>