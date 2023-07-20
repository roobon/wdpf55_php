<?php
    $numbers =  [5,10,15,45,25,130,35,40,45,50];

    $cities = ["Dhaka", "Sylhet", "Khulna", "Cumilla", "Dhaka", "Cumilla"];

        //sorting number
        sort($numbers);

        echo "<pre>";
        print_r($numbers);


        $result = array_reverse($numbers);
        echo "<hr>";
        print_r($result);

        //sorting cities
        sort($cities);

        echo "<pre>";
        print_r($cities);

?>