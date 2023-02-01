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
    $number = 1;

    // PHP While Loop-> Executes as long as condition is true
    while($number <= 5){
        echo "The number is: $number <br>";
        $number = $number + 1; //number++
    }

    $age = 0;

    while($age <= 100){
        echo "You are $age years old <br>";
        $age = $age + 10;
    }
    
?>

</body>
</html>