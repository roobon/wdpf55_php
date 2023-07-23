<?php 

    $numbers = array(25, 7, 20, 15, 30);
    $fruits = array("Apple"=>215, "Mango"=>50, "Orange"=>30, "Banana"=>65);

    echo "<pre>";
    print_r($numbers);
    echo "<br>";
    asort($numbers);
    echo "<br>";
    print_r($numbers);
    echo "<br>";
    print_r($fruits);
    echo "<br>";
    asort($fruits);
    echo "<br>";
    print_r($fruits);
    


?>