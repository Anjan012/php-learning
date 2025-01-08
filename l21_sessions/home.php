<?php

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

This is the login page
    <br>
    <form action="home.php" method="post">
        <button name="logout">Logout</button>
    </form>
    <br>
    
</body>
</html>

<?php

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
    
    // we can access the session variable form either page as long as you start a session 
    
        if(isset($_POST["logout"])){
            // we will use the session destory function

            session_destroy();
            header("location: index.php");
        }
    
?>