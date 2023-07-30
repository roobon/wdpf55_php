<?php 
$num1 = array(33,41,52,63,33,52,41,1,6,8,1,6,8,7,5,7);
$num2 = array(4,47,49,48,12,35,1,6,55,5,7,1);
$intersectNum = array_intersect($num1, $num2); //array_intersect check matched numbers only.
print_r($intersectNum);

$diffNum = array_diff($num1, $num2); //array_diff check difference numbers only 
print_r($diffNum);
?>