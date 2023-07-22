<?php 
// $numbers = [4,45,43, 354, 54, 54, 52, 443];

$fruits = ["Apple"=>20, "Orange"=>666, "Grape"=>455, "Mango"=>50];
$days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thurstday", "Friday", "Saturday"];

rsort($numbers);
print_r($numbers);
arsort($fruits);
// sort($fruits);
print_r($fruits);
arsort($days);
print_r($days);

?>