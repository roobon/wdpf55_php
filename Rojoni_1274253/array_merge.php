<?php 
$country = ["Bangladesh","Nepal","Bhutan","Srilanka"];

$capital = ["Dhaka","Kathmandu","Thimpu","Kolombo"];
$merged = array_merge($country,$capital);

echo "<pre>";
print_r($merged );
shuffle($merged );
print_r($merged );


?>