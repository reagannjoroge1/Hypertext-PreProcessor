<?php
//Salary Determinant
    $hours =  13;
    $rate = 20;
    $weekly_pay = null;

    if($hours <=0 ){
        $weekly_pay = 0;
    }
    elseif ($hours <= 50){
        $weekly_pay = $hours * $rate;
    }
    elseif($hours > 50){
        $weekly_pay = ($hours * $rate)+(($hours - 50)* $rate * 1.65);
    }
     //1.65 is a bonus according to labor laws

    echo"Your weekly pay is \${$weekly_pay}"

?>