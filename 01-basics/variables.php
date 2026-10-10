<?php
    $food = "pizza";
    $name = "Reagan";

    $age = 22;
    $users = 10;
    $quantity = 9;

    $gpa = 3.5;
    $price = 499.99;

    $total = null;

    $total = $quantity * $price;


    echo"I love {$food} <br> ";
    echo"My name is {$name}<br>";
    echo"I am {$age} <br> ";
    echo"There are  {$users} users online<br> ";
    echo"You scored a gpa of {$gpa} <br> ";
    echo"The fridge costs \${$price}<br>";
    echo "You have bought {$quantity} fridges <br>";
    echo "The total cost of the fridges is \${$total} <br>";
?>