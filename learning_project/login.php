<?php
session_start();
include "db_conn.php";

if(isset($_POST["username"]) && isset($_POST["password"])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$uname = validate($_POST["username"]);
$pass = validate($_POST["password"]);

if(empty($uname)){
    header("Location: index.php?error=User Name is required");
    exit();
}
elseif(empty($pass)){
    header("Location: index.php?error=Password is required");
}

// importing the data from the database

$sql = "SELECT * FROM users WHERE user_name= '$uname' AND password='$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    if($row['user_name'] == $uname && $row)
}

?>