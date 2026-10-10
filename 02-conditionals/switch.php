<?php
//shorter code is written compared to else if statements
    $date = ("June");

    switch ($date) {
        case "Monday":
            echo"I hate Mondays";
            break;
        case "Tuesday":
            echo"It's Taco Tuesdays";
            break;
        case "Wednesday":
            echo"The work week is halfway done";
            break;
        case "Thursday":
            echo"Week goals are done";
            break;
        case "Friday":
            echo"The weekend is here!";
            break;
        case "Saturday":
            echo"It's sabbath";
            break;
        case "Sunday":
            echo"A day to relax";
            break;
        default:
            echo "{$date} is not a day of the week";
    }
?>