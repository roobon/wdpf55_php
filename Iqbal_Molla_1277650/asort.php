<?php 
$numbers = array(50,7,19,10,15,18);
$fruits = array("Apple"=> 225, "Mango"=>330, "Orange"=>280, "Grape"=>350);

echo "<pre>";
print_r($numbers);
echo "<br>";
asort($numbers);
echo "<br>";
print_r($numbers);

echo "<pre>";
print_r($fruits);
echo "<br>";
asort($fruits);
echo "<br>";
print_r($fruits);

