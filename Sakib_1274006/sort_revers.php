<?php 
$inputArray = array(1, 28, 24, 345, 421, 44, 75);

sort($inputArray);
echo "<pre>";
print_r($inputArray);

echo "<hr>";

$result = array_reverse($inputArray);
print_r($result);

$rajdhani = ["Dhaka","Bangladesh", "USA", "Newyork", "Maldeep", "Malee"];

echo "<hr>";


sort($rajdhani);
echo "<pre>";
print_r($rajdhani);

$rajdhani = array(
    "Dhaka"=>"Bangladesh",
    "USA"=>"Newyork",
    "Maldeep"=>"Malee",
);

echo "<hr>";


sort($rajdhani);
echo "<pre>";
print_r($rajdhani);
?>