<?php 
$numbers = array(25, 7, 20, 15, 30);
$fruits = array("Apple"=>215, "Mango"=>50, "Orange"=>30, "Grape"=>200);
$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");

echo "<pre>";
arsort($numbers);
print_r($numbers);
echo "<br>";
arsort($fruits);
print_r($fruits);
echo "<br>";
arsort($days);
print_r($days);
?>