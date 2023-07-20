<?php 

$numbers = [ 5, 10 , 15 ,5 , 20 , 10 , 15, 5, 5 ];

// $counting = array_count_values($numbers);
$counting = array_unique($numbers);

echo "<pre>" ;
print_r($counting)




?>