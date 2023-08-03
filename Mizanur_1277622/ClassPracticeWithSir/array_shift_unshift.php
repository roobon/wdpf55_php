<?php 
$carBrands = array("Honda", "Hyundai", "Toyota");
echo "<pre>";
echo "<h3>Before array_unshift & array_shift</h3>";
print_r($carBrands);
echo "<hr>";
array_unshift($carBrands, "Audi", "Marcedes", "Ford");
echo "<h3>After array_unshift (unshift add data to start)</h3>";
print_r($carBrands);
echo "<hr>";
echo "<h3>After array_shift (shift remove data from start)</h3>";
array_shift($carBrands);
print_r($carBrands);
?>