<?php 
$carBrands = array("Honda", "Hyundai", "Toyota");
echo "<pre>";
echo "<h3>Before array_push & array_pop</h3>";
print_r($carBrands);
echo "<hr>";
array_push($carBrands, "Audi", "Marcedes", "Ford");
echo "<h3>After array_push (push add data to end)</h3>";
print_r($carBrands);
echo "<hr>";
echo "<h3>After array_pop (pop remove data from end)</h3>";
array_pop($carBrands);
print_r($carBrands);
?>