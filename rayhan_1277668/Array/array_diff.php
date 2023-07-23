<?php 
$array1 = [ "A", "B", "C", "D" , "E" , "cumilla", "noakhali" ];
$array2 = [ "A", "B", "x", "y" , "z" , "rangpur", "dhaka" ];
$array3 = [ "A", "B", "x", "2" , "1" , "barisal", "khulna" ];

$array_diff = array_diff($array3, $array1  , $array2 );

echo "<pre>" ;
print_r($array_diff) ;

?>