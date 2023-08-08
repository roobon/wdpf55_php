<?php 

$address = array(
    
   ["name" =>"Masum", "Phone"=>"0934875847", "Email"=>"masum@gmail.com"], 
   ["name" =>"Sadid", "Phone"=>"093456847", "Email"=>"sadid@gmail.com"], 
   ["name" =>"Shuvo", "Phone"=>"094575847", "Email"=>"Shuvo@gmail.com"], 
   ["name" =>"Molla", "Phone"=>"045875847", "Email"=>"molla@gmail.com"], 
);
    $names = array_column($address, "name");
    $phones = array_column($address, "Phone");
    $emails = array_column($address, "Email");
    
    print_r($names);
    print_r($phones);
    print_r($emails);
?>