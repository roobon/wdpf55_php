<?php 
$address = array(
    ["name"=>"Rafiq","phone"=>"07456675","email"=>"rafiq@gmail.com"],
    ["name"=>"Karim","phone"=>"07456555","email"=>"karim@gmail.com"],
    ["name"=>"Salam","phone"=>"07456555","email"=>"salam@gmail.com"],
    ["name"=>"Jakir","phone"=>"07456555","email"=>"jakir@gmail.com"],
    ["name"=>"Mamun","phone"=>"07456555","email"=>"mamum@gmail.com"],
    ["name"=>"Masum","phone"=>"07456555","email"=>"masum@gmail.com"],
);

$names = array_column($address,"name");
echo "<pre>";
print_r($names);
$phone = array_column($address,"phone");
echo "<pre>";
print_r($phone);
$email = array_column($address,"email");
echo "<pre>";
print_r($email);



?>