<?php 
$numbers = array(10, 7, 9, 2);
$fruits = array("Apple"=>11, "Mango"=> 6, "Orange" => 3, "Banana" => 8);
$days = array ("Friday", "Saturday", "Sunday", "Monday");

echo "<pre>";
rsort ($numbers);
print_r($numbers);

echo "<hr>";
echo "<pre>";
rsort ($fruits);
print_r($fruits);

echo "<hr>";
echo "<pre>";
rsort ($days);
print_r($days);


?>