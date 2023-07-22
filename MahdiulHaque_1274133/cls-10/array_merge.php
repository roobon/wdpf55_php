<?php 
   
   $country = ["Bangladesh", "Nepal", "Bhutan", "Srilanka"];

   $otherworld = ["Australia", "England", "Southafrica", "Newzealand"];

   $merged = array_merge($country, $otherworld);

   echo "<pre>";
   print_r($merged);
   shuffle($merged);
   print_r($merged);
   



?>