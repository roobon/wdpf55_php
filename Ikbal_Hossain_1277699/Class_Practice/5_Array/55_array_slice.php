<?php 
// creating subset
$cities = ["Dhaka", "Khulna", "Rajshahi","Cumilla", "Sylhet", "Chottogram"];

$sliced = array_slice($cities, 3, 2 );
echo("<pre>");
print_r($sliced);
?>