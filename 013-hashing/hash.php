<?php
    $password = "reagan1234";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    // echo"{$hash}";

    if(password_verify("reagan1234", $hash)) {
        echo "you are logged in";
    }
    else {  
        echo "Incorrect password!";
    }
?>