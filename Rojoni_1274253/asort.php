<?php
$numbers = array(2,55,5,7,10,15,30);

$fruits = array("Apple"=>20,"Mango"=>60,"Orange"=>30,"Grape"=>200);

echo "<pre>";
print_r($numbers);
echo "<pre>";
asort($numbers);
echo "<pre>";
print_r($numbers);
echo "<pre>";
asort($fruits);
print_r($fruits);


?>