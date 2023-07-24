<?php 
$country =[ "Bangladesh","Nepal","Vhutan","Srilanka"];
 
$capital =["Dhaka","Katmundu","Thimpu","Colombo"];

$combined =array_combine($country,$capital);

echo "<pre>";
print_r($combined);