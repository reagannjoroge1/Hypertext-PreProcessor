<?php
    setcookie("fav_sport","football", time() + -0,"/");
    setcookie("fav_manager","pep", time() + (86400*2),"/");
    setcookie("fav_team","city", time() + (86400*2),"/");

    foreach($_COOKIE as $key => $value){
        echo"{$key} = {$value}<br> ";

        if(isset($_COOKIE[$key])){
            echo "You like {$_COOKIE[$key]}";
        }
        else{
            echo "You don't have a favourite sport";
        }
    }
?>