<?php

$fruits = array("Apple"=>20, "Banana"=>30,"Grape"=>50);

echo "<pre>";
print_r($fruits);
echo "<br>";
$picked = array_rand($fruits,1);
echo "<br>";

print_r($picked);
?>