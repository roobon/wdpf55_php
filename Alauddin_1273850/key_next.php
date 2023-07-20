<?php 
    $countries = array("Dhaka"=>"Bangladesh", "Kathmundu"=>"Napal", "colombo"=>"Srilanka", "Maley"=>"Maldives",);

    echo key($countries);
    // next($countries);
    // echo "<br>";
    // echo key($countries);
     echo "<hr>";

    while($key = key($countries)){
        echo "$key <br>";
        next($countries);
    }

    echo "<hr>";

    foreach($countries as $city => $country){
        echo $city. "<br>"; //= key($countries). "<br>";
        
    }

    



?>