<?php 
$sutdents = array("Mizanur Rahman", "Rahim", "Karim");
//print_r($sutdents); //array called by print_r. echo can't print array.
//var_dump($sutdents); //know the type of data we use var_dump.
echo "Main array \n";
print_r($sutdents);

echo "array unshift by Rana & Jahin. It add data first in array \n";
array_unshift($sutdents, "Rana", "Jahin");
print_r($sutdents);

echo "array shift and first value will removed. It remove data from first \n";
array_shift($sutdents);
print_r($sutdents);

echo "array push add data to last of the array \n";
array_push($sutdents, "Ahad", "Unknown");
print_r($sutdents);

echo "array pop remove data to last of the array \n";
array_pop($sutdents);
print_r($sutdents);

?>