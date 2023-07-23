<?php 
$array1 = array("OH", "CA", "NY", "HI", "CT", "NG");
$array2 = array("OH", "CA", "HI", "IA");
$array3 = array("TX", "MD", "NE", "OH", "HI", "DHAKA");
$diff = array_diff($array1, $array2, $array3);
print_R($diff);
?>