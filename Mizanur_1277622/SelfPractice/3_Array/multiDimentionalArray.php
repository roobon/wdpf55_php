<?php 
echo "Multidimentional array or Nested Array \n";
$food = [
    "veg" => ["Carrot", "Bottle Guard", "Brinjal", "Tomato", "Potato"],
    "fru" => ["Mango", "Jackfruit", "Litchi"]
];
array_push($food["fru"],"Banana", "Guava");
//print_r ($food);

echo "Example of Nested Array \n";
$sample = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12],
    [13,14,15,16, [20,21,22]] 
];
print_r ($sample);
print_r ($sample[3][4][2]); //access an element from nested array
?>