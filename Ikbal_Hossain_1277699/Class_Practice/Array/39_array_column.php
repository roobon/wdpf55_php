<?php 
    $address = array(
        ["name"=> "Molla", "phone"=> "+8801782-158120", "email"=> "molla@gmail.com"],
        ["name"=> "Masum", "phone"=> "+8801920-797783", "email"=> "masum@gmail.com"],
        ["name"=> "Sadid", "phone"=> "+880 1991-638639", "email"=> "sadid@gmail.com"],
        ["name"=> "Nadia", "phone"=> "01854995544", "email"=> "nadia@gmail.com"],
        ["name"=> "Mamun", "phone"=> "01854995544", "email"=> "mamun@gmail.com"],
        ["name"=> "Rojoni", "phone"=> "01854995544", "email"=> "rojoni@gmail.com"], 
    );

    $names = array_column($address, "name");
    echo("<pre>");
    print_r($names);

    $phones = array_column($address, "phone");
    echo("<pre>");
    print_r($phones);



?>