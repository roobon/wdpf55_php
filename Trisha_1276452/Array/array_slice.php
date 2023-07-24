<?php 
$cities = ["Dhaka","Khulna","Rajsahi","Cumilla","Sylhet","Chiagong"];
$sliced = array_slice($cities, 3,2);

echo "<pre>";
print_r($sliced);

//splice can add and remove
//sliced can only add
