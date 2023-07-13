<?php 

// Numaric or indexed array

$fruits = array("Mango", "Jackfruit", "Orange", "Lichi", "Apple");

echo "Number of items in fruits array " . count($fruits);

echo "<pre>";
print_r($fruits);
var_dump($fruits);

echo "<hr>";

// Assosisative Array
$ages = array("Masum"=>21, "Mizanur"=>22, "Milla"=>23);

$output = "";
// echo "<ol>";

foreach($ages as $key=>$value){
//     echo "<li>" . "Name: ". $key . "  " . "Age: " . $value . "</li>";

// echo "</ol>";



$output .= "Name: $key Age: $value<br>";}

echo $output;


// Multidimantional Array

echo "<hr>";

$students = array(
    "Masum"=>array("email"=>"masum745@gmail.com", "Phone"=>"01458795212"),
    "Rojoni"=>array("email"=>"rojoni584@gmail.com", "Phone"=>"0125478951"),
    "Molla"=>array("email"=>"molla45134@gmail.com", "Phone"=>"0147854624"));

    print_r($students);

echo $students ["Molla"]["Phone"];
?>