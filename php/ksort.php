<?php 
$numbers = array(25, 7, 20, 15, 30);
$fruits = array("Apple"=>215, "Mango"=>50, "Orange"=>30, "Grape"=>200);
$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");

echo "<pre>";
ksort($numbers);
print_r($numbers);
echo "<br>";
ksort($fruits);
print_r($fruits);
echo "<br>";
ksort($days);
print_r($days);
?>