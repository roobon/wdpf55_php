<?php
$cities = ["Dhaka", "khulna", "Rajshahi", "Chittagong", "Barishal", "Mymensingh", "Sylhet"];

$spliced = array_splice($cities, 3, -1, ["Noakhali", "Natore"]);
print_r($cities);
?>