<?php 
    $country = array(
        "Dhaka"=>"Bangladesh",
        "Dhilli"=>"India",
        "Kadmundu"=>"Nepal",
        "Male"=>"Maldives",
    );
    next($country);
    echo key($country)." = ";
    echo current($country);
    echo "<br>";
    reset($country);
    echo key($country)." = ";
    echo current($country);
    echo "<br>";
    end($country);
    echo key($country)." = ";
    echo current($country);
    
    echo "<hr>";

    echo "<br>";
    prev($country);
    echo key($country)." = ";
    echo current($country);
    echo "<br>";
    prev($country);
    echo key($country)." = ";
    echo current($country);
  
   
   
    // echo "<hr>";

    // while($key = current($country)){
    //     echo "$key <br>";
    //     next($country);
    // }

    // echo "<hr>";
    // foreach ($country as $country => $value) {
    //     echo "$value <br>";
    // }
?>