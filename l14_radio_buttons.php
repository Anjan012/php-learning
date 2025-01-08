

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="l14_radio_buttons.php" method="post" >
        <input type="radio" name="credit_card" value="Visa"> Visa <br>
        <input type="radio" name="credit_card" value="MasterCard"> MasterCard <br>
        <input type="radio" name="credit_card" value="American Express"> American Express <br>
        <button name="confirm" value="confirm">Submit</button>
    </form>
</body>
</html>

<?php

if(isset($_POST["confirm"])){

    $credit_card = null;

    if(isset($_POST["credit_card"])){
        $credit_card = $_POST["credit_card"];
    }

    // if($credit_card == "Visa"){
    //     echo "You selected Visa";
    // }
    // else if($credit_card == "MasterCard"){
    //     echo "You selected Mastercard";
    // }
    // else if($credit_card == "American Express"){
    //     echo "You selected American Express";
    // }
    // else{
    //     echo "Please make a selection!";
    // }

    switch ($credit_card){
        case "Visa":
            echo "You selected Visa";
            break;
        
            case "MasterCard":
                echo "You selected MasterCard";
                break;
            
            case "American Express":
                echo "You selected American Express";
                break;
            
            default: 
                echo "Please make a selection";
    }
}

?>