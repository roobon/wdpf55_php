<?php 
$country = ["Bengladesh", "India", "Nepal", "Bhutan", "Srilanka", "Newzeland"];
$food =  ["Biriyani", "Tehari", "Khichuri", "Morog-Polao", "Beef", "Mutton", "Chicken"];

$merge = array_merge($country, $food);
//print_r ($merge);
shuffle($merge); //shuffle is a built in function that shuffle array values randomly.
print_r($merge);
?>