<?php

// hashing : transforming sensitive data(password) into letters, numbers, and/or symbols via a mathematical process. (similar to encryption ) Hides the orginal data from 3rd parties.

$password = "pizza123";

// PASSWORD_DEFAULT : constant , use the bcrypt algorithm 

$hash = password_hash($password, PASSWORD_DEFAULT); // this hash is going to be stored in the database to be protected

// echo $hash;

// password_verify() : function that verifies the palne text with the hash 

if(password_verify("hamburger666", $hash)){
    echo "You are logged in";
}
else{
    echo "incorrect password";
}


?>