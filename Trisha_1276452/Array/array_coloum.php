<?php
$adress = array(
    ["name"=>"Rafiq","phone"=>"01435677","email"=>"rafiq@gmail.com"],
    ["name"=>"Tafiq","phone"=>"01435677","email"=>"rafiq@gmail.com"],
    ["name"=>"Mafiq","phone"=>"01435677","email"=>"rafiq@gmail.com"],
    ["name"=>"Safiq","phone"=>"01435677","email"=>"rafiq@gmail.com"],
    ["name"=>"Eafiq","phone"=>"01435677","email"=>"rafiq@gmail.com"],

);
 $names = array_column($adress,"name");
 echo "<pre>";
 print_r($names);
 $email = array_column($adress,"email");
 echo "<pre>";
 print_r($email);



    

?>