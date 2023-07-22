<?php 
$cars = array("Rolla royals", "Merchedes", "BMW");
$moreCars = array_unshift($cars, 'Bhughati');

echo "<pre>";
print_r($cars);
echo "<hr>";

array_shift($cars,);
print_r($cars);

?>