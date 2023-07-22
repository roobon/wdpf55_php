<?php 


$cities = [ "Dhaka" , "Rajshahi", "Khulna", "Barisal", "sylhet", "Ctg" , "Mymsk" ];

$sliced = array_slice($cities, 3,2) ;

echo "<pre>" ;
print_r($sliced) ;


?>