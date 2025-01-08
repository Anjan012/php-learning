<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="l4_get_post.php" method="post">
    <label for="">username</label><br>
     <input type="text" name="username"><br>
     <label for="">password</label><br>
     <input type="password" name="password"><br>
     <button>Login</button>
    </form> -->

    <form action="l4_get_post.php" method="post">
        <label for="">quantity</label><br>
        <input type="text" name="quantity"><br>
        <button>total</button>
    </form>
</body>
</html>
<?php

// $_GET, $_POST = special variables used to collect data from html form data is sent to the file in the action attribute of <form> 
// <form action="some_file.php" method="get">

// $_GET = Data is appended to the url , not secure, charlimit, bookmark is possible w/values, GET requests can ba cached, Better for a search page ( searching, filtering, or paging)

// $_POST = Data is packaged inside the body of http request, more secure, no data limit , cannot bookmark, GET request are not cached, better for submitting credentials (submitting forms, modifying data, or creating new resources )

// appended to the url that
// echo $_GET["username"]."<br>";
// echo "{$_GET["password"]} <br>";

// not appended in url
// echo $_POST["username"]."<br>";
// echo "{$_POST["password"]} <br>";

$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = null;
$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}/s <br>";
echo "Your total is : \${$total}"

?>