<?php 


// The asort() function sorts an associative array in ascending order, according to the value.

    $numbers = array(5,3,6,8,9);
    echo "<pre>";
    print_r($numbers);
    echo "<br>";
    asort($numbers);
    
    print_r($numbers);
    echo "<hr>";
    $fuits = array("apple"=>20,"mango"=>50,"orange"=>30);
    echo "<pre>";
    print_r($fuits);
    echo "<br>";
    asort($fuits);
    
    print_r($fuits);
?>