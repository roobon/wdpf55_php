<?php 

$cities = ["Dhaka", "Khulna", "Cumilla", "Sylhet", "Chittagong"];
$sliced = array_slice($cities, 3, 2);

echo "<pre>";
print_r($sliced);


$cities = ["Dhaka", "Khulna", "Cumilla", "Sylhet", "Chittagong"];
$sliced = array_splice($cities, 3, -2("pabna","raj"));

echo "<pre>";
print_r($sliced);

?>