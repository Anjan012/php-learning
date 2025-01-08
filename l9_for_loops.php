<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="l9_for_loops.php" method="post">
        <label for="">Enter a number to count down form : </label>
        <input type="text" name="counter">
        <button>start</button>
    </form>
</body>
</html>

<?php 
// repeat the code certain amount of times 
// for(counter; condition; inr/dcr){}

// for($i = 10; $i>0 ; $i--){
//     echo $i . "<br>";
// }

$counter = $_POST["counter"];

for($i = $counter; $i > 0; $i--){
    echo $i. "<br>";
}

?>