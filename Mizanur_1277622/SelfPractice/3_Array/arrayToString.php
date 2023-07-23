<?php 
echo "Simple String \n";
$veg = "Biriyani, Tehari, Khichuri";
echo $veg . "\n";
echo "String convert to an ARRAY by explode keyword \n";
$vegetable = explode(", " , "Biriyani, Tehari, Khichuri"); //after coma blank space called delimeter. if we dont use blank space it print with blank space
//print_r ($vegetable);
echo $vegetable[1] . "\n";

echo "array to string convert by join keyword \n";
$vegetableToSrting = join(", ", $vegetable);
echo $vegetableToSrting . "\n";

echo "Total  Number in array " . count($vegetable);
?>