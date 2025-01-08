<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="l18_sanitize_validate_input.php" method="post">
    username: <br>
    <input type="text" name="username"><br>
    age: <br>
    <input type="text" name="age"><br>
    email: <br>
    <input type="text" name="email"><br>
    <button name="login">Login</button>
</form>
    
</body>
</html>

<?php

// if you don't sanitize or validate your user input someone can write malicious code like a cross site script or a sql injection  <script> alert("you have a virus"); </script>

// it will be best to prevent code that form running one way to do it to ass filter using filter_input() function

// ---------------- sanitize ------------------------------

// FILTER_SANITIZE_SPECIAL_CHARS = don't allow user to input any special character
// FILTER_SANITIZE_NUMBER_INT = it filters any character beside numbers
// FILTER_SANITIZE_EMAIL = filters all the illegal character in the email

//  if(isset($_POST["login"])){
//     // $username = $_POST["username"];

//     $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

//     $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

//     $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

//     echo "hello {$username} <br>";
//     echo "you are  {$age} years old <br>";
//     echo "Your email is: {$email} <br>";
//  }

 // go to the view page source and you can see the any special character is replaced


//  ------------------------- validate -------------------------------

// - validation if is not pass it returns a empty string 

// FILTER_VALIDATE_INT = for checking if the input is only number 

if(isset($_POST["login"])){
    
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT );
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if(empty($age)){
        echo "That number is not valid <br>";
    }
    else{
        echo "You are {$age} years old <br>";
    }

    if(empty($email)){
        echo "That email is not valid <br>";
    }
    else{
        echo "Your email is :  {$email}  <br>";
    }

 }


?>