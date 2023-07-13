<?php 

$cars = array("VOLOVO", "MARCHIDIS", "BMW");
echo "<pre>";
print_r($cars);

echo "<hr>";

array_push($cars, "AUDI", "TOYOTA");

print_r($cars);

echo "<hr>";

array_pop($cars);
print_r($cars);

?>
