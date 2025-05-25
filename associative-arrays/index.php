<?php

    $capitals = array(
        "Philippines" => "Manila",
        "USA" => "Washington, D.C.",
        "Japan" => "Tokyo",
        "South Korea" => "Seoul",
        "Singapore" => "Singapore",
        "India" => "New Delhi",
    );

    /* $capitals["Philippines"] = "Mandaluyong";
    $capitals["China"] = "Beijing";
    arra_pop($capitals);
    array_shift($capitals);
    array_unshift($capitals, "Vietnam" => "Hanoi");
    $keys = array_keys($capitals);
    $values = array_values($capitals);
    $capitals = array_flip($capitals);
    $capitals = array_reverse($capitals); 
    echo count($capitals)*/

    foreach($capitals as $key => $value) {
        echo "The capital of {$key} is {$value}.<br>";
    }

?>