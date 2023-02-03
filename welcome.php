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
// Using the break keyworrd to terminate loops

    for($age = 0; $age < 10; $age++){
        if($age == 4){
            break;
        }

        echo "You are $age years old <br>";
    }
// The continue keyword stops the iteration of the loop if a condition occurs and continues with the next iteration of the loop

    for($x = 0; $x < 10; $x++){
        if($x == 4){
            continue;
        }
        echo "You are $x th place <br>";
    }
?>

</body>
</html>