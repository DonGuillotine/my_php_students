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
    $oscar_age = 200;

    // is_int() checks whether a variable is an integer
    var_dump(is_int($oscar_age));

    echo '<br>';

    // Returns false bacuse $kike_age is not an integer
    $kike_age = 30.5;
    var_dump(is_int($kike_age));

    echo '<br>';

    // is_float() checks whether a varible is a float
    $donald_age = 15.34;
    var_dump(is_float($donald_age));

    echo '<br>';

    // 1.9e411 is an regarded as an infinite number because it is is larger than PHP_FLOAT_MAX.
    $age = 1.9e411;
    var_dump($age);

    echo '<br>';

    // Returns NAN because we tried an impossible mathematical operation
    $php_class = acos(8);
    var_dump($php_class);

    echo '<br>';
    // Check if a variable is numeric

    $x = 3000;
    var_dump(is_numeric($x));

    echo '<br>';

    $y = "3000";
    var_dump(is_numeric($y));

    echo '<br>';

    $z = "20.93" + 100;
    var_dump(is_numeric($z));

    echo '<br>';

    $final = "Hello Donald";
    var_dump(is_numeric($final));
    echo '<br>';
    // Cast a float to an integer

    $oscar_to_int = 2333.733;
    $int_cast = (int)$oscar_to_int;
    echo $int_cast;

    echo '<br>';
    // Cast a string to an integer

    $kike_to_int = "23456.789";
    $int_cast = (int)$kike_to_int;
    echo $int_cast;

    echo '<br>';
    // Creating a constant
    define('HELLO_WORLD', 'Welcome to Outworld');
    echo HELLO_WORLD;

    echo '<br>';

    // Creating an Array constant using the define() function.
    define("cars", ['Php', 'Laravel', 'Synphony', 'Paper PHP']);
    echo cars[0];


    // PHP Constants are Global -> Can be accessed inside a function
    define('php_class', 'Welcome to php class');
    echo '<br>';
    function myFunction(){
        echo php_class;
    }

    myFunction();
    echo '<br>';
    echo php_class;

    echo '<br>';
    // The IF statement executes only IF the condition returns true
    $time = date("H");

    if($time < "20"){
        echo "Good Afternoon y'all!";
    }









?>

</body>
</html>