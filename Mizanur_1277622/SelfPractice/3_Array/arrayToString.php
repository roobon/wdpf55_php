<?php 
echo "Simple String \n";
$veg = "Biriyani, Tehari, Khichuri";
echo $veg . "\n";
echo "String convert to an ARRAY by explode keyword \n";
$vegetable = explode(", " , "Biriyani, Tehari, Khichuri"); //after coma blank space called delimeter. if we dont use blank space it print with blank space //", " has a problem if we forget to use space before any elements it count only 2 elements in 1. so we use here preg_split its a regular expression.
//print_r ($vegetable);
echo $vegetable[1] . "\n";

echo "array to string convert by join keyword \n";
$SpaceOrComma = preg_split("/(, |,)/" , "Biriyani, Tehari, Khichuri,Kabab,Morog-polao");
$vegetableToSrting = join(", ", $SpaceOrComma);
echo $vegetableToSrting . "\n";
print_r ($SpaceOrComma);
echo "Total  Number in array " . count($SpaceOrComma);
?>