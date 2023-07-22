<?php
    $address = array(
        ["name"=>"Rafiq","phone"=>"01784545122", "email"=>"rafiqe@gmail.com"], 
        ["name"=>"Karim","phone"=>"01784545123", "email"=>"Karim@gmail.com"], 
        ["name"=>"Mizan","phone"=>"01784545124", "email"=>"Mizan@gmail.com"], 
        ["name"=>"Masum","phone"=>"01784545125", "email"=>"Masum@gmail.com"], 
        ["name"=>"Mamun","phone"=>"01784545126", "email"=>"Mamun@gmail.com"], 
        ["name"=>"Sadid","phone"=>"01784545127", "email"=>"Sadid@gmail.com"], 
        
    );

    $name = array_column($address,"name");
    echo "<pre>";
    print_r($name);
    $phone = array_column($address, "phone");
    echo "<pre>";
    print_r($phone);
    $email = array_column($address,"email");
    echo "<pre>";
    print_r($email);

?>