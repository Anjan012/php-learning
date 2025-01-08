<?php

// variables : named container for storing a reasuable data

$name = "Anjan khadka";
$food = "pizza <br>";
$email = "fake@gmail.com";

// whole integers 
$age = 20; // integer
$users = 2;
$quantity = 3;

// Floats : contain decimal numbers 
$gpa = 2.5;
$price = 4.99;
$tax_rate = 5.1;

// booleans : true or false
$employeed = true;
$online = false; // nothing is display
$for_sale = true;
$total = null;

echo "You have order {$quantity} X {$food} <br>";
$total = $quantity * $price;
echo "Your total is \${$total} <br>"

// echo $name;
// echo "hello {$name} <br>";
// echo "You like {$food} <br>";
// echo "Your email is {$email} <br>";
// echo "You are {$age} years old <br>";
// echo "There are {$users} users online <br>";
// echo "You will like to buy {$quantity} items <br>";

// echo "Your gpa is {$gpa} <br>";
// echo "Your pizza is \${$price} <br>";
// echo "The sales tax rate is \${$tax_rate} <br>";

// echo "Online status : {$online} <br>";

?>