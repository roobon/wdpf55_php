<?php 

// The array_merge() function merges one or more arrays into one array.

     $country = ["Bangladesh","India","Nepal","Maldives"];
    $capital = ["Dhaka","Dhilli","Kadmundu","Male"];
    $merge = array_merge($country,$capital);
    echo "<pre>";
    print_r($merge);

?>