<?php 

// numaric array

$flowers = array("Rose", "Hasnahena", "Jesmin", "Jui");

echo "<pre>";
print_r($flowers);
var_dump($flowers);

echo "<hr>";

// accociative array

$age = array("Sakib"=>20, "Saadat"=>28, "Saud"=>54);
$output = "";

foreach($age as $key=>$value){
$output .= "Name: $key Age: $value <br>";
}
echo $output;

echo "<hr>";

// Multidimantional Array

$contact = array(
    "Sakib"=>array("Email"=>"sakib875@gmail.com", "phone" =>"01716477600"),
    "Rakib"=>array("Email"=>"rakib842@gmail.com", "phone" =>"0181547845"),
    "Akib"=>array("Email"=>"sakib875@gmail.com", "phone" =>"01554557685"));

    print_r($contact);






?>