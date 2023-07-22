<?php 
$number= [2, 43, 23, 43, 12, 4, 54, 256, 76, 213];
$cities =["NewYork", "Arizona", "Miami", "Washinton", "Ohaio", "Penslibanya", "Miami", "NewYork" ];


sort($cities);
sort($number);
print_r($number);
print_r($cities);

echo "<br>";

$result = array_reverse($number);
$cityrev = array_reverse($cities);
print_r($cityrev);

print_r($result);



?>