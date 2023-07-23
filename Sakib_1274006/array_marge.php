<?php 


$country1 = ["Bangladesh", "Nepal", "Bhutan", "Sritlangka"];
$country2 = ["Thailand", "India", "USA", "UAE"];

$marged = array_merge($country1, $country2);
echo "<pre>";

print_r($marged);
shuffle($marged);
print_r($marged);



?>