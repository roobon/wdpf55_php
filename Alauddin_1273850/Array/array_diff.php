<?php 

$array1 = array("OH", "CA", "NY", "HI", "CT", "CUMILLA", "Noakhali");
$array2 = array("OH", "CA", "HI", "NY", "IA", "Rangpur");
$array3 = array("TX", "MD", "NE", "OH", "HI", "DHAKA");
$diff = array_diff($array1, $array2, $array3);
print_r($diff);



?>