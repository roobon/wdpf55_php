<?php 

    $numbers = [5, 15, 30, 5, 130, 30, 20, 10, 15, 20, 221];
    $cities = ["Dhaka", "Khulna", "Sylet", "Comilla", "Dhaka", "Khulna"];
    $countries = array("Dhaka"=>"Bangladesh", "Kathmundu"=>"Napal", "colombo"=>"Srilanka", "Maley"=>"Maldives",);

    sort($numbers);

    echo "<pre>";
    print_r($numbers);

    $result = array_reverse($numbers);
    echo "<hr>";
    print_r($result);

    sort($cities);
    echo "<hr>";
    print_r($cities);

    sort($countries);
    echo "<hr>";
    print_r($countries);



?>