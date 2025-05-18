<?php

    $age = 20;

    if($age >= 18) {
        echo "You may enter this site."; 

    } elseif($age < 18 && $age >= 0) {
        echo "You must be 18+ to enter.";

    } else {
        echo "Invalid age.";
        
    }

?>