<?php 
//LOGICAL OPERATIONS COMBINE CONDITIONAL STATEMENTS
//&& true if both conditions are true (AND)
// || true if at least one codtion is true (OR)
// ! true if false and false if true (NOT)
    //TICKET DISCOUNT

    $child = false;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 50;
    }
    else{
        $ticket = 65;
    }
    echo"The ticket is: {$ticket}";
?>