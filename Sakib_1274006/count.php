<?php 

$cities = [5, 15, 20, 58, 60, 58, 20, 60];
$counting = array_count_values($cities);
echo "<pre>";
print_r($counting);

echo "<hr>";

$inputArray = array(1, 2, 2, 3, 4, 4, 5);

$uniqueArray = array_unique($inputArray);

print_r($uniqueArray);



?>