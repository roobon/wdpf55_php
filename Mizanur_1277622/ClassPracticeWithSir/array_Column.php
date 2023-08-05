<?php 
$person = array(
    ["Name"=> "Mizanur", "Age"=>"25", "Phone"=>"01479"],
    ["Name"=> "Rana ", "Age"=>"26", "Phone"=>"02584"],
    ["Name"=> "Ahad ", "Age"=>"27", "Phone"=>"03584"],
    ["Name"=> "Rahman ", "Age"=>"28", "Phone"=>"04584"],
    ["Name"=> "Rana ", "Age"=>"29", "Phone"=>"05584"],
);
$Names = array_column($person, "Name");
$Age = array_column($person, "Age");
$Phone = array_column($person, "Phone");
print_r($Names);
print_r($Age);
print_r($Phone);
//print_r($person[0])
?>