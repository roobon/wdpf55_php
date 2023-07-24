<?php 

$address = array(
    ["name" => "Rafiq", "Phone" => "0147852369", "Email"=>"rafiq@gmail.com"],
    ["name" => "Karim", "Phone" => "0147852369", "Email"=>"rafiq@gmail.com"],
    ["name" => "Jabbar", "Phone" => "0147852369", "Email"=>"rafiq@gmail.com"],
    ["name" => "Mamun", "Phone" => "0147852369", "Email"=>"rafiq@gmail.com"],
    ["name" => "Mizanur", "Phone" => "0147852369", "Email"=>"rafiq@gmail.com"],
    ["name" => "Shubho", "Phone" => "0147852369", "Email"=>"rafiq@gmail.com"],
    ["name" => "Saddam", "Phone" => "0147852369", "Email"=>"rafiq@gmail.com"],
    ["name" => "Masum", "Phone" => "0147852369", "Email"=>"rafiq@gmail.com"],
    ["name" => "Kalam", "Phone" => "0147852369", "Email"=>"rafiq@gmail.com"],
    ["name" => "Sabbir", "Phone" => "0147852369", "Email"=>"rafiq@gmail.com"]
);

$names = array_column($address, "name");
echo "<pre>";
print_r($names);