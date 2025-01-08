<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="login.php" method="post">
        <h2>login</h2>

        <!-- This part is for checking the error  -->

        <?php
        if (isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?> </p>

        <?php } ?>
            <label for="">Username</label>
            <input type="text" name="username"> <br>
            <label for="">Password</label>
            <input type="password" name="password"> <br>

            <button name="">Login</button>

    </form>
</body>

</html>