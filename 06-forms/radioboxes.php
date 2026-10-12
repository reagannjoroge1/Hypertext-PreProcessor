<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Cards</title>
</head>
<body>
    <form action="radioboxes.php" method="post">
        <input type="radio" name="card" value="American Express">American Express<br>
        <input type="radio" name="card" value="Visa">Visa<br>
        <input type="radio" name="card" value="Mastercard">Mastercard<br><br>

        <input type="submit" name="confirm" value="confirm">

    </form>
</body>
</html>
<?php
    if(isset($_POST["confirm"])){
        $card = null;

        if(isset($_POST["card"])){
        $card = $_POST["card"];
        }

        switch($card){
            case "Visa":
                echo"<br>You have selected Visa!";
                break;
            case "Mastercard":
                echo"<br>You have selected Mastercard!";
                break;
            case "American Express":
                echo"<br>You have selected American Express!";
                break;
            default:
                echo"<br> Please select a card";
        }
    }
?>