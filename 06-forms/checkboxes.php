<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="burger" value="Burger">Burger<br>
        <input type="checkbox" name="sandwich" value="Sandwich">Sandwich<br><br>
    
        <input type="submit" name="order" value="order">
    </form>
</body>
</html>
<?php
    if(isset($_POST["order"])){
        if(isset($_POST["pizza"])){
            echo"Your pizza is on the way<br>";
        }
        if(isset($_POST["burger"])){
            echo"Your burger is on the way!<br>";
        }
        if(isset($_POST["sandwich"])){
            echo"Your sandwich is on the way!<br>";
        }
         if(empty($_POST["pizza"])){
            echo"You dont like pizza!<br>";
        }
        if(empty($_POST["burger"])){
            echo"You don't like burgers!<br>";
        }
        if(empty($_POST["sandwich"])){
            echo"You don't like sandwiches!<br>";
        }
    }


?>