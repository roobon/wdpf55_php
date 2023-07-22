<?php 
$numbers =[9,15,30,5,20,10,15,20,221];
$cities = ["Khulna","Dhaka","Barishal","Sylhet"];
// sort($numbers);
echo "<pre>";
print_r($numbers);


//Reverse 

$result = array_reverse($numbers);
echo "<hr>";
print_r($result);
// print_r($cities);

sort($cities);
echo "<hr>";
print_r($cities);


?>