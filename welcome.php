<?php 
declare(strict_types=1);
// PHP FUNCTIONS

function writeMsg(){
    echo "Hello World <br>";
}

writeMsg();

function familyName($first_name, $year){
    echo "$first_name Okoye was born in $year <br>";
}

familyName("Janai", 2004);
familyName("Jarel", 1999);
familyName("Jonadab", 1982);
familyName("Jesse", 1716);
familyName("John", 2003);

// Strict is not enabled
function addNumbers(int $a, int $b){
    return $a + $b;
}

echo addNumbers(5, 6);

//  Default Function Argument

function setHeight(int $minHeight = 50){
    echo " The Height is : $minHeight<br>";
}


setHeight(340);
setHeight();
setHeight(127);


// To let a function return a value, use the return statement
function sum(int $x, int $y){
    $z = $x + $y;
    return $z;
}

echo "5 + 10= " .sum(5, 10) . "<br>";
echo "7 + 13= " .sum(7, 13) . "<br>";
echo "2 + 4= " .sum(2, 4) . "<br>";

// Declaring a type for the function return
function concatNumbers(float $a, float $b) : float{
    return (int)($a + $b);
}

echo concatNumbers(1.2, 5.6) . "<br>";

// Passing Arguments by Reference
function add_five(&$value){
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>
