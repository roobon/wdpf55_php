<?php 
$country=["Bangladesh", "Nepal", "Bhutan", "Srilanka"];
// $otherworld=["Austrilia", "Naderlands", "England", "Swezerland"];
$capital = ["Dhaka", "Kathmundu", "Thimpu", "Colombo"];
$combined= array_combine($country, $capital);
print_r($combined);
shuffle($combined);
print_r($combined)


?>