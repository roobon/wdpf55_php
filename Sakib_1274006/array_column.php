<?php 

$address = array(
    ["name"=>"Rafique", "phone"=>"012548", "email"=>"rafique@gmail.com"],
    ["name"=>"karim", "phone"=>"012548", "email"=>"rafique@gmail.com"],
    ["name"=>"safique", "phone"=>"012548", "email"=>"rafique@gmail.com"],
    ["name"=>"hanif", "phone"=>"012548", "email"=>"rafique@gmail.com"],
    ["name"=>"hasan", "phone"=>"012548", "email"=>"rafique@gmail.com"],
    ["name"=>"rakib", "phone"=>"012548", "email"=>"rafique@gmail.com"],
);

$names = array_column($address, "name");
echo "<pre>";
print_r($names);

$phones = array_column($address, "phone");
echo "<pre>";
print_r($phones);

$mails = array_column($address, "email");
echo "<pre>";
print_r($mails);

?>