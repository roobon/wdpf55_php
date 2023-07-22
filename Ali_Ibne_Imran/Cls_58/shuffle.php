<?php 

// make an associative array

     $country = ["Bangladesh","India","Nepal","Maldives"];
    $capital = ["Dhaka","Dhilli","Kadmundu","Male"];
    $merge = array_merge($country,$capital);
    echo "<pre>";
    shuffle($merge);
    echo "<hr>";
    print_r($merge);


?>