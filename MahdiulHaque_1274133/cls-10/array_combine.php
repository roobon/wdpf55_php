<?php 
   
   $asia = ["Bangladesh", "Nepal", "Bhutan", "Srilanka", "India", "Pakistan"];

   $capital = ["Dhaka", "Kathmandu", "Thimpu", "Newzealand", "Delhi", ];

   $merged = array_combine($asia, $capital);

   echo "<pre>";
   print_r($merged);



?>