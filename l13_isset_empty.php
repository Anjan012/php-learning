<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="l13_isset_empty.php" method="post">
        <label for="">username</label>
        <input type="text" name="username">
        <label for="">password</label>
        <input type="password" name="password">
        <button value="login" name="login">Log in</button> <br>
    </form>
</body>

</html>

<?php

// Two useful function
// isset() : returns TRUE if a variable is declared and not null
// empty() : returns TRUE if a variable is not declared, false, null, ""

// $username = true;
// $username = "";
// $username = "Anjan";
// echo isset($username); // it is true

// if(isset($username)){
//     echo "This variable is set";
// }
// else{
//     echo "This variable is not set";
// }


// $username = "Anjan";
// $username = null;
// $username = true;
// $username = false;
// $username = "";

// if(empty($username)){
//     echo "This variable is empty";
// }
// else{
//     echo "This variable is not empty";
// }


// $_POST = super gobal variable 
// This is our associative array contain within POST super gobal variable
foreach($_POST as $key => $value){
    echo "{$key} = {$value} <br>";
}


// if (isset($_POST["login"])) {

//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     if (empty($username)) {
//         echo "Username is missing";
//     } 
//     elseif(empty($password)){
//         echo "Password is missing!";
//     }
//     else {
//         echo "Hello {$username}";
//     }
// }

?>