<?php

    // cookie = Information about a user stored in a user's web browser targeted advertisement , browsing preferences, and other non-sensitive data

    // we will use setcookie function, oue cookie is stored as an asso_ciative array setcookie("key", "value", time in second, file path ); 
    // setcookie("fav_drink", "coffee",time()+(86400*3), "/");
    
    // setcookie("fav_food", "pizza",time()-0, "/");
    
    
    
    // to delete a cookie set the time to -0
    // setcookie("fav_food", "pizza",time()-0, "/");
    
    setcookie("fav_drink", "coffee",time()+(86400*3), "/");
    setcookie("fav_desert", "ice cream",time()+(86400*4), "/");

    // we are accessing cookie super gobal variable our cookie is stored as key value pairs

    // foreach($_COOKIE as $key => $value){
    //     echo "{$key} => {$value} <br>";
    // }

    if(isset($_COOKIE["fav_drink"])){
        echo "BUY SOME {$_COOKIE["fav_drink"]} !!!";
    }
    else{
        echo "I don't know your favourite food";
    }
?>