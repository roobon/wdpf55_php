<?php 
$num = array(25, 7, 30, 5, 60, 8);
$fruits = array("Mango"=>55, "Jackfruit"=>50, "Apple"=>60, "Litchi"=>20);
print_r($num);
ksort($num); //ksort short the indexd of an array from 1-9 or a-z
print_r($num);
echo "=========\n";
print_r($fruits);
ksort($fruits); //ksort short the indexd of an array from 1-9 or a-z
print_r($fruits);

?>