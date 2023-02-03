<?php 
declare(strict_types=1);
    // PHP Arrays
    // Indexed Array
    $cars = array("Mercedes", "Volkswagen", "Honda");
    $cars_count = count($cars);
    echo $cars_count;
    echo "This is " . $cars[0] . ", " . $cars[1] . ", " . $cars[2] . "<br>";

    for($i = 0; $i < $cars_count; $i++){
        echo $cars[$i];
        echo "<br>";
    }

    // Associative Arrays
    // Second way
    $age["Oscar"] = "32";
    $age["Ken"] = "20";
    $age["Donald"] = "12";

    // First way
    $age = array("Oscar"=>"32", "Ken"=>"20", "Donald"=>"12");
    echo "Oscar is " . $age['Oscar'] . " years old. <br>";

    // Looping through an associative array

    foreach($age as $elder => $x_value){
        echo "The Key is " . $elder . ", Value is " . $x_value;
        echo "<br>";
    }

    // A multidimensional array is an array containing one or more arrays
    $cars = array(
        array("Volove", 22, 18),
        array("MBW", 15, 13),
        array("Toyota", 5, 2),
        array("Honda", 17, 15),
    );
    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
