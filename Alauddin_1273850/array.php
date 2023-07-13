<?php 

//numeric indexed array

$fruits = array("Mango", "Lichi", "Jacfruit", "Banana", "Orange");

Echo "Number of items in fruits array" . count($fruits). "<br>";

echo "<pre>";
print_r($fruits);
var_dump($fruits);
echo "<br>";
echo "<hr>";

// Associative Array


$ages = array("Masum"=>20, "Imran"=>21, "Mizanur"=>22, "Molla"=>23);

//print_r($ages);
$output = "";
foreach($ages as $name=>$age){
    //echo "Name: $name Age: $age<br>";
    $output .= "Name: $name Age: $age<br>";

}

echo $output;
echo "<br>";
echo "<hr>";

//Multidimentional array

$students = array(
    "Masum"=>array("email"=>"masum@gmail.com", "phone"=>"018236479"),
    "Rojoni"=>array("email"=>"rojoni@gmail.com", "phone"=>"017236479"),
    "Iqbal"=>array("email"=>"iqbal@gmail.com", "phone"=>"019236479")
);

print_r($students);

echo "<hr>";
echo "<br>";
echo $students["Iqbal"]["phone"];



?>