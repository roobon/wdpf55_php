<?php


$fruits = array("Apple"=>20,"Mango"=>60,"Orange"=>30,"Grape"=>200);

echo "<pre>";
print_r($fruits);
echo "<br>";
$picked = array_rand($fruits,3);
echo "<br>";
print_r($picked);



?>