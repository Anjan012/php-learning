<?php

    $db_server = "localhost"; //This holds the name of the server 
    $db_user = "root";
    $db_pass = ""; // we don't have a password for empty
    $db_name = "businessdb"; // The name of your database
    $conn = ""; // a connection variable

    // Establishing the connection
    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name); // connect function requires four arguments
    }
    catch(mysqli_sql_exception){
        echo "Could not connect! <br>";
    }

    

    
?>