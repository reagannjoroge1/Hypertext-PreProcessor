<?php 
//hypotenuse
    function hypotenuse(int $a, int $b){
        $c = sqrt($a**2 + $b**2);
        return $c;
    }
    echo hypotenuse(3,4);
?>