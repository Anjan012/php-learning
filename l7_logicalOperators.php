<?php
// combine conditational statements

// AND , OR , NOT : (&& , || , !)

// AND : both condition must be true
// OR : alleast one condition must be true
// NOT : True if false. False if True

// $temp = 15;
// $cloudy = false;

// if($temp < 0 || $temp > 30){
//     echo "the weather is bad <br>";
// }
// else{
//     echo "The weather is good <br>";
// }

// if(!$cloudy){
//     echo "It's sunny <br>";
// }
// else{
//     echo "It's cloudy <br>";
// }

$child = false;
$senior = true;
$ticket = null;

if($child || $senior){
    $ticket = 10;
}
else{
    $ticket = 15;
}

echo "The ticket price is \${$ticket}";

?>