<?php 
    $country = array(
        "Dhaka"=>"Bangladesh",
        "Dhilli"=>"India",
        "Kadmundu"=>"Nepal",
        "Male"=>"Maldives",
    );
    echo key($country);
    echo "<br>";
   
   
    echo "<hr>";

    while($key = key($country)){
        echo "$key <br>";
        next($country);
    }

    echo "<hr>";
    foreach ($country as $city => $country) {
        echo "$city <br>";
    }
?>