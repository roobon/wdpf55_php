<?php 
$string = "Hello World";
echo $string[2] . "\n";

$length = strlen($string);
echo $length . "\n";

$car = "1944 Ford";
echo substr($car, 5, 4). "\n"; //first parameter is starting position and second is from starting to continue.
echo substr($car, 2, -4)
?>