<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- php_self : sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form.
try changing  file name 

it is vunerable try filter before using it:

    example : htmlspecialchars($_SERVER["PHP_SELF"])
    this will avoid cross site script
-->

<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    username: <br>
    <input type="text" name="username">
    <button>submit</button>
</form>
    
</body>
</html>

<?php

// $_SERVER = SGB that contains headers, path and the script locations.
// The entries in this array are created by the web server. Shows nearly everything you need to know about the current web page env.

    // foreach($_SERVER as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    // in old web browser you can submit without using submit button so the most realiable method to solve that is to use request method 

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "Hello";
    }

?>