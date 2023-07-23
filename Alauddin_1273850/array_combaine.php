<?php 

$asia = ["Bangladesh", "Nepal", "Bhutan", "Srilanka"];

$capital = ["Dhaka", "Kathmandu", "Thimpu", "Colombo"];

$combined = array_combine($asia, $capital);

echo "<pre>";
print_r($combined);



?>