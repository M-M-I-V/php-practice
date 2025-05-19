<?php

    setcookie("favorite_dish", "Chop Suey", time() + (86400 * 3), "/");
    setcookie("favorite_drink", "water",time() + (86400 * 3), "/");

    if(isset($_COOKIE["favorite_dish"])) {
        echo "Order {$_COOKIE["favorite_dish"]}. 50% off!";

    } else {
        echo "I don't know your favorite dish.";

    }

?>