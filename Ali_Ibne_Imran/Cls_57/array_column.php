<?php 
    $mans = array(
        ["name"=>"Rafiq","phone"=>"075496446","address"=>"mirpur"],
        ["name"=>"Sofiq","phone"=>"074444444","address"=>"dhanmondi"],
        ["name"=>"Karim","phone"=>"077525565","address"=>"rampura"],
        ["name"=>"Rahim","phone"=>"077258265","address"=>"uttara"],
        ["name"=>"Jabbar","phone"=>"077875656","address"=>"palton"],
    );
    $names = array_column($mans, "name");
    echo "<pre>";
    print_r($names);
    $phone = array_column($mans, "phone");
    print_r($phone);
    $address = array_column($mans, "address");
    print_r($address);
?>