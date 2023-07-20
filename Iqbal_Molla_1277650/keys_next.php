<?php
  $countries = array(
        "Dhaka" =>"Bangladesh",
        "Kathmundu" =>"Nepal",
        "Colombo" =>"Srilanka",
        "Male" =>"Maldives",
    );
   echo key($countries);
   next($countries);
   echo "<br>";
   echo key($countries);
   echo "<br>";
   echo "<br>";

   while($key =key($countries)){
    echo "$key <br>";
    next($countries);
   }

   echo "<br>";

   foreach($countries as $city =>$country){
   
    echo $country. "=>";
    echo $city;
    echo "<br>";
   }
?>