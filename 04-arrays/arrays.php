<?php 
//arrays
    $cars = array("BMW", "McLaren", "Benz", "Volvo");

    array_push($cars,"Audi");
    array_pop($cars);
    // array_shift($cars);
    // $new_cars = array_reverse($cars);
    // echo count($cars);
    
    foreach ($cars as $car) {
        echo "{$car} <br>";
    }
?>

