<?php 

    $numbers = array(25, 7, 20, 15, 30);
    $fruits = array("Apple"=>215, "Mango"=>50, "Orange"=>30, "Banana"=>65);
    $days = array("Sunday", "Monday", "Tuesday", "Wednessday", "Thusday", "Friday", "Saturday");

    echo "<pre>";
    krsort($numbers);
    print_r($numbers);
    echo "<br>";
    krsort($fruits);
    print_r($fruits);
    echo "<br>";
    krsort($days);
    print_r($days);
    


?>