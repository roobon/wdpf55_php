<?php 
$cities = ["Dhaka","Khulna","Rajshahi","Cumilla","Sylhet","Chottogram"];

$sliced = array_splice($cities,3,-1,array("Pabna","Natore","Noakhali"));

echo "<Pre>";
print_r($cities);


?>