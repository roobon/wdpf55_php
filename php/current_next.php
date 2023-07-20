<?php 
   $countries =  array("Dhaka"=>"Bangladesh", "Kathmundu"=>"Nepal","Colombo"=>"Srilanka","Maley"=>"Maldives");

   while($value = current($countries)){
        echo "$value <br>";
        next($countries);
   }
   echo "<hr>";
   foreach($countries as $city=>$country){
        echo $country . ", " ;
   }
?>