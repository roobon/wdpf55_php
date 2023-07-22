<?php
    $country = ["Bangladesh","Nepal", "Bhutan", "Srilanka"];

    $capital = ["Dhaka", "Kathmandu", "Thimpu", "Colombo"];

    $merge = array_merge($country,$capital);


    echo "<pre>";

    print_r($merge);
    shuffle($merge);
    print_r($merge);
