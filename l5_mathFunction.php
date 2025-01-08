<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="l5_mathFunction.php" method="post">
        <label for="">x: </label>
        <input type="text" name="x">
        <label for="">y: </label>
        <input type="text" name="y">
        <label for="">z: </label>
        <input type="text" name="z">
        <button>total</button>
    </form>
<!-- 
    <form action="l5_mathFunction.php" method="post">
        <label for="">radius:</label>
        <input type="text" name="radius"> <br>
        <input type="submit" value="calculate">
    </form> -->
</body>
</html>

<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

$total = abs($x);
// $total = round($x);
// $total = floor($x); // round down
// $total = ceil($x); // round up
// $total = pow($x, $y);
// $total = sqrt($x);
// $total = max($x,$y,$z);
// $total = min($x,$y,$z);
// $total = pi();
// $total = rand(1,6); // up to 2 billion

echo $total;

// $radius = $_POST["radius"];
// $circumference = null;

// $circumference = 2 * pi() * $radius;

// $circumference = round($circumference, 2); // round up to 2 decimal
// $area = pi() * pow($radius, 2);
// $area = round($area, 2);
// $volume = null;
// $volume = 4/3*pi()*pow($radius, 3);
// $volume = round($volume, 2);

// echo "circumference = {$circumference}cm <br>";
// echo "area = {$area}cm^2 <br>";
// echo "volume = {$volume}cm^3 <br>";

?>