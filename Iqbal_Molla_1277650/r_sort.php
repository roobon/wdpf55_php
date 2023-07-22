<?php
    $numbers = array(50,7,19,10,15,18);
    $fruits = array("Apple"=> 225, "Mango"=>330, "Orange"=>280, "Grape"=>350);

    
    echo "<pre>";
    rsort($numbers);
    print_r($numbers);
    
    echo "<br>";
    rsort($fruits);
    print_r($fruits);
   
