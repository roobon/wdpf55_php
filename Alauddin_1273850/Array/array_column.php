<?php 
$address = array(
    ["name"=>"Rafiq", "phone"=>"0134569755", "email"=>"rafiq@gmail.com"],
    ["name"=>"Karim", "phone"=>"0144569755", "email"=>"karim@gmail.com"],
    ["name"=>"Rahim", "phone"=>"0154569755", "email"=>"rahim@gmail.com"],
    ["name"=>"Jabbar", "phone"=>"0174569755", "email"=>"jabbar@gmail.com"],
    ["name"=>"Kaium", "phone"=>"0194569755", "email"=>"kaium@gmail.com"],
    ["name"=>"Arefin", "phone"=>"0184569755", "email"=>"arefin@gmail.com"],
    ["name"=>"Sharforaz", "phone"=>"0164569755", "email"=>"sharforaz@gmail.com"],

);


echo "<pre>";
$names = array_column($address, "name");
echo "<br>";
print_r($names);
$phones = array_column($address, "phone");
echo "<br>";
print_r($phones);




?>