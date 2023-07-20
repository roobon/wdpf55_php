<?php 
$num = [10,30,1,5,50,3,11,20];
$cities = ["Dhaka", "Narayanganj", "Barisal"];
sort($num);  //array sort by number
sort($cities); //array sort by string
echo "<pre>";
print_r($num); //print sort number
print_r($cities); //print sort string
echo "\n";
$result = array_reverse($num); //array reverse
print_r($result);
?>