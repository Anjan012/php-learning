<?php
    include("database.php");

    // $username = "patrik";
    // $password = "rock3";
    // $hash = password_hash($password, PASSWORD_DEFAULT); // Default is the bcrypt algorithm

    // $sql = "INSERT INTO `users`( `user`, `password`) VALUES ('$username','$hash')";

    // try{
    //     mysqli_query($conn, $sql);
    //     echo "user is now registered!";
    // }
    // catch(mysqli_sql_exception){
    //     echo "Could not registered user";
    // }


    // -----Retriving the data from the database 

    $sql = "SELECT *FROM users ";
    $result = mysqli_query($conn, $sql);

    // This function will return how many rows are within results 
    if(mysqli_num_rows($result) > 0){
        // $row = mysqli_fetch_assoc($result); // This function returns the next available row within object  , our row is an associative array we can access this data by a key then be return one of the values 

        // echo $row["id"] . "<br>";
        // echo $row["user"] . "<br>";
        // echo $row["reg_date"] . "<br>";

        // -- for multiple rows 
        while($row = mysqli_fetch_assoc($result)){ // This function returns the next available row within object  , our row is an associative array we can access this data by a key then be return one of the values 

        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
        }
    }
    else{
        echo "No user found!";
    }

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>