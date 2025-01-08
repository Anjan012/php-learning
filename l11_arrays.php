<?php

// arrays = special type variable which can hold more than one value at a time

$foods = array("apple", "orange", "banana", "cocunut");
// echo $foods; // we cannot print directly

// echo $foods[0]. "<br>"; 
// echo $foods[1]. "<br>"; 
// echo $foods[2]. "<br>"; 
// echo $foods[3]. "<br>"; 

// $foods[0] = "pineapple";

// array_push($foods, "pineapple", "kiwi"); // for adding at the end of the array
// array_pop($foods); // Remove the end 
// array_shift($foods); // Remove the first element of the array 
// $foods = array_reverse($foods);
echo count($foods). "<br>";

// foreach(){}

foreach($foods as $food){
    echo $food . "<br>";
}





?>