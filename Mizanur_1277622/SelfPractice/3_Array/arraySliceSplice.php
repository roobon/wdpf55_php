<?php 
//ArrarSlice start
$fruits = array("Apple", "Banana", "Orange", "Mango", "Jackfruit");
$somefruites = array_slice($fruits, 1, 3);
print_r ($somefruites);
//ArrarSlice end
echo "\n";
$somefruitesSplice = array_splice($fruits, 2, 2);
print_r($somefruitesSplice); //array_Splice change main array and create separate array
print_r($fruits);
?>