<?php 

$cars = array("Volvo","BMW","Toyota");
echo "<pre>";
print_r($cars);
echo "<hr>";



$morecars = array_unshift($cars,"Marchedes","Audi");
echo "<pre>";
print_r($cars);
echo "<hr>";


array_shift($cars);
print_r($cars);


?>