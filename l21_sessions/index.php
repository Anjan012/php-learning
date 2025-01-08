<?php

    // session = SGB used to store information on a user to be used across multiple pages. A user is assigned a session is ex. login credentials 

    // for example : You login on facebook , you can visit multiple pages stayed logged in 

    // This is our login page

    // steps for session ----------------- 

    // step 1: start the session

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Username: </label>
        <input type="text" name="username"> <br>
        <label for="">Password: </label>
        <input type="password" name="password"> <br>

        <button name="login">Login</button>

    </form>
</body>
</html>

<?php

    if(isset($_POST["login"])){

        
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            // when hit the login button we would like to redirect it to the home page for that we have a header function

            header("Location: home.php");
            
        }
        else{
            echo "Missing username/password";
        }
    }



    // $_SESSION["username"] = "Anjan";
    // $_SESSION["password"] = "anjan123";

    // echo $_SESSION["username"] . "<br>";
    // echo $_SESSION["password"] . "<br>";

    // i want this to be accessable form our home page

?>