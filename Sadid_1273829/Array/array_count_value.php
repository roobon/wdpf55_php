<?php

$number = [5,1,5,15,30,5,30,20,10,15,20];
$counting = array_count_values($number);

echo "<pre>";

print_r($counting);

?>