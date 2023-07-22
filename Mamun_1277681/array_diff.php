<?php 
$array1 = ["oh", "ah", "ny", "ct", "pn", "Noakhali"];
$array2 = ["oh", "ah", "ny", "cl", "pn", "Cumilla"];
$array3 = ["ws", "ca", "ny", "ca", "pn", "Dhaka"];
$diff = array_diff($array1, $array2, $array3);
print_r($diff);


?>