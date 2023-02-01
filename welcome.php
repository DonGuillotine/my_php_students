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
    // PHP FOREACH LOOP
  $colors = array("red", "green", "blue", "yellow");

  foreach($colors as $value){
    echo "$value <br>";
  }
  echo '<br>';
  
  // Outputing both keys and values of the student array
  $students = array("Oscar"=>"Football", "Kike"=>"Music");

  foreach($students as $x => $value){
    echo "$x = $value <br>";
  }
?>

</body>
</html>