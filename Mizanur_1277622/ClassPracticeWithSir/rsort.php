<?php 
$num = array(25, 7, 30, 5, 60, 8);
$fruits = array("Mango"=>55, "Jackfruit"=>50, "Apple"=>60, "Litchi"=>20);
print_r($num);
rsort($num); //rsort short the values of an array from 9-1
print_r($num);
echo "=========\n";
print_r($fruits);
rsort($fruits);
print_r($fruits);

?>