<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="l12_associative_arrays.php" method="post">
        <label for="Enter a country"></label>
        <input type="text" name="country">
        <button>Submit</button>
    </form>
</body>
</html>

<?php
// An array made of key=>value pairs 
// countries +. capital

$capitals = array("USA"=> "Washington D.C.", 
                "Japan"=>"Kyoto",
                 "South korea"=>"Seoul", 
                 "India"=>"New Delhi");

// echo $capitals["USA"];
// $capitals["USA"] = "Las Vegas";
// $capitals["China"] = "Bejing";
// array_pop($capitals);
// array_shift($capitals);
// $keys = array_keys($capitals); // returns the new array
// $values = array_values($capitals); 
// $capitals = array_flip($capitals); // returns new associative array (switches keys with values and viceversa)
// $capitals = array_reverse($capitals);

// echo count($capitals)."<br>";

foreach($capitals as $key => $value){
    echo "{$key} = {$value} <br>";
}

$capital = $capitals[$_POST["country"]];
echo "The capital is {$capital}";
?>