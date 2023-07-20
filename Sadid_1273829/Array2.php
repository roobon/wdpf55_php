<?php

// numeric indexed array
$fruits = ["Mango", "Banana", "Apple", "Orange"];
echo "<pre>";
print_r($fruits);
echo "<br>";
echo "<br>";


// associative array
$items = array(
    "drink" => ["Water", "Milk"],
    "fruit" => "Mango",
    "vegitable" => "Potato"
);
echo $items["drink"][1];
echo "<br>";
print_r($items);
echo "<br>";
echo "<br>";

// multi Dimensional Array
$numbers = [[1,2,3,4], [5,6,7,8], [9,10,11,12]
];
print_r($numbers);

$numbers[2][2];