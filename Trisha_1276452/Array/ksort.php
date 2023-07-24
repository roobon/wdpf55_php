<?php
$numbers = array(25,7,10,15,30);
$fruits = array("Apple"=>20, "Lichi"=>40,"Banana"=>30,"Grape"=>50);

echo "<pre>";
print_r($numbers);
echo "<br>";
ksort($numbers);
echo "<br>";
print_r($numbers);
echo "<br>";
ksort($fruits);
print_r($fruits);
?>