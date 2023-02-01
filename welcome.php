<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- PHP Syntax -->
<?php
    echo '<br>';
    // The IF statement executes only IF the condition returns true
    $time = date("H");

    if($time < "20"){
        echo "Good Afternoon y'all!";
    }
    echo '<br>';
    // IF ELSE condition
    $time_two = date("H");

    if($time_two > "20"){
        echo "Have a good day!";
    }
    else{
        echo "Have a good night!";
    }


    $time_three = date("H");

    if ($time_three < "10"){
        echo "Good Morning Everyone";
    }

    elseif($time_three < "20"){
        echo "Good day Everyone";
    }

    else{
        echo "Good night Everyone";
    }
    echo '<br>';
    // Switch Statement

    $favColor = "green";

    switch($favColor){
        case "green":
            echo "Oscar's Favourite color is green";
            break;
        case "blue":
            echo "Oscar's Favourite color is blue";
            break;
        case "red":
            echo "Oscar's Favourite color is red";
            break;
        default:
        echo "Your color doesn't exist!";
    }






?>

</body>
</html>