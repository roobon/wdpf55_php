<?php 
//we define index name on associative array.
$person = [
    "Name"=>"Mizanur Rahman",
    "ID"=>1277622,
    "Batch"=>55,
    "Email"=> "mizanur1326@gmail.com"
];
//echo $person["ID"] ."\n";


$food = [
    "Vegetable"=>"Brinjal, Carrot, Bottle Guard",
    "Fruits"=> "Mango, Jackfruit, Litchi",
    "Drinks"=> "Water, Milk, Cold Drinks"
];
//echo $food['Drinks'] . "\n";


echo "we can run loop on this array \n";
foreach ($food as $key => $value) {
    echo $key."=".$value."\n";
}


echo "we can print only keys means only index of an associative array by array_keys\n";
$keys = array_keys($food);
print_r ($keys);


echo "we can print only values of an associative array by array_values\n";
$Values = array_values($food);
print_r ($Values);

?>