<?php 
$numbers = [5, 15, 30, 5, 130, 20, 10, 15, 221];
$cities = ["Khulna", "Sylhet", "Coumilla", "Dhaka"];
$countries =  array("Dhaka"=>"Bangladesh", "Kathmundu"=>"Nepal","Colombo"=>"Srilanka","Maley"=>"Maldives");
//sort($numbers);
echo "<pre>";
print_r($numbers);

$result = array_reverse($numbers);
echo "<hr>";
print_r($result);

sort($cities);
echo "<hr>";
print_r($cities);

sort($countries);
echo "<hr>";
print_r($countries);


?>