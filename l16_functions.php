<?php

// funtion = write a code once, reuse when you need it type() after function name to invoke ex. add() subtract() multiply() divivde()

// function name 

// function happy_birthday($firstname, $age){
//     echo "Happy Birthday dear {$firstname} <br>";
//     echo "Happy Birthday to you <br>";
//     echo "Happy Birthday dear {$firstname} <br>";
//     echo "You are {$age} years old! <br> <br>";
// }

// happy_birthday("Spongebob", 30); // arguement
// happy_birthday("Patrik", 35);
// happy_birthday("squidward", 45);


// function is_even($number){
//     $result = $number % 2;
//     return $result;
//     // return  $number % 2;
// }

// echo is_even(11);


// Funtion to find the hyptenuse of a right angle triangle


function hypotenuse(float $a, float $b){
    $c = sqrt($a**2 +$b**2);
    return $c;
}

// echo hypotenuse("pizza",5)
echo hypotenuse(4,5)

?>