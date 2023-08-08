<?php 
    $address = array(
        ["name"=>"Rafiq", "phone"=>"01476222", "email"=>"rafiq@gmail.com"], 
        ["name"=>"Karim", "phone"=>"01478222", "email"=>"karim@gmail.com" ],
        ["name"=>"Rahim", "phone"=>"01474222", "email"=>"rahim@gmail.com" ],
        ["name"=>"Jodu", "phone"=>"01478222", "email"=>"jodu@gmail.com" ],
        ["name"=>"Modu", "phone"=>"01478722", "email"=>"modu@gmail.com" ],
        ["name"=>"Salam", "phone"=>"01498222", "email"=>"salam@gmail.com" ],
        ["name"=>"Barkat", "phone"=>"01470222", "email"=>"barkat@gmail.com" ], 
    );
        $names = array_column($address, "name");
        echo "<pre>";
        print_r($names);
        $phones = array_column($address, "phone");
        echo "<pre>";
        print_r($phones);
?>