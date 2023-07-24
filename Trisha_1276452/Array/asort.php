<?php
$numbers = array(25,7,10,15,30);
$fruits = array("Apple"=>20, "Banana"=>30,"Grape"=>50);

echo "<pre>";
print_r($numbers);
echo "<br>";
asort($numbers);
echo "<br>";
print_r($numbers);
echo "<br>";
asort($fruits);
print_r($fruits);
?>