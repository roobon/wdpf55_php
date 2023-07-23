<?php 


$ages = array("Masum"=>21, "Mizanur"=>22, "Milla"=>23);

echo "<pre>";
print_r($ages);
echo "<br>";
$picked = array_rand($ages, 2);
print_r($picked);

?>