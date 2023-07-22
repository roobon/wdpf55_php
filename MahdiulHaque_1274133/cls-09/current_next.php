<?php 
    $country = array(
        "Dhaka"=>"Bangladesh",
        "Dhilli"=>"India",
        "Kadmundu"=>"Nepal",
        "Male"=>"Maldives",
    );
    echo current($country);
  
   
   
    echo "<hr>";

    while($key = current($country)){
        echo "$key <br>";
        next($country);
    }

    echo "<hr>";
    foreach ($country as $country => $value) {
        echo "$value <br>";
    }
?>