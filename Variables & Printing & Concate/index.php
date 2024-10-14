<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables & Printing & Concatenation</title>
</head>
<body>
    
 <!--Opening tag  --> <?php

    // variables
    $a = "Salik";
    $b = "Ali";
    // how to space between in variable give space in qutoes like this --->>>   $a = " Salik ";  $b = " Ali ";

    // printing
    echo $a;
    echo $b;

    // use html tag in php
    echo "<br><br>$a";
    echo "<br>$b<br><br>";

    // concatenation
    $a = 10;
    $b = 20;
    $c = $a + $b;
    echo "Addition of " . $a . " and " . $b . " is " . $c . " :";


    ?> <!--Closing tag  --> 
</body>
</html>