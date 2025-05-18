<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="radio" name="credit_card" value="Visa">
        <label>Visa</label><br>
        <input type="radio" name="credit_card" value="Mastercard">
        <label>Mastercard</label><br>
        <input type="radio" name="credit_card" value="American Express">
        <label>American Express</label><br>
        <input type="submit" name="confirm" value="confirm"><br>
    </form>
</body>
</html>

<?php

    if(isset($_POST["confirm"])) {
        $credit_card = null;

        if(isset($_POST["credit_card"])) {
            $credit_card = $_POST["credit_card"];
        }

        switch($credit_card) {
            case "Visa":
                echo "You selected Visa.";
                break;

            case "Mastercard":
                echo "You selected mastercard.";
                break;

            case "American Express";
                echo "You selected American Express.";
                break;

            default:
                echo "Please select a credit card.";
                break;
        }
    }

?>