<?php
// a replacement of if statement , more efficient less code , for checking a value or variable many time overs

// $grade = "pizza";

// switch($grade){
//     case "A":
//         echo "You did great";
//         break;
//     case "B":
//         echo "You did good";
//         break;
//     case "C":
//         echo "You did Okay";
//         break;
//     case "D":
//         echo "You did poorly";
//         break;
//     case "F":
//         echo "You Failed";
//         break;
//     default:
//         echo "{$grade} is not valid";
// }

$date = date("l");
$date = "Friday";

switch($date){
    case "Monday":
        echo "I hate mondays!";
        break;
    case "Tuesday":
        echo "It is Taco Tuesday!";
        break;
    case "Wednesday":
        echo "The work week is half over!";
        break;
    case "Thursday":
        echo "it's almost the weekend!";
        break;
    case "Friday":
        echo "The weekend is here !";
        break;
    case "Saturday":
        echo "I love saturday!";
        break;
    case "Sunday":
        echo "Time to relax!";
        break;
    default:
        echo "{$date} is not valid";

}
?>