<?php 

// make an associative array

     $country = ["Bangladesh","India","Nepal","Maldives"];
    $capital = ["Dhaka","Dhilli","Kadmundu","Male"];
    $merge = array_combine($country,$capital);
    echo "<pre>";
    print_r($merge);

?>