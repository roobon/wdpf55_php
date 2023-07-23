<?php 
   
   $asia = ["Bangladesh", "Nepal", "Bhutan", "Srilanka", "India", "Pakistan"];

   $capital = ["Dhaka", "Kathmandu", "Thimpu", "Newzealand", "Delhi", "Islamabad"];

   $combined = array_combine($asia, $capital);

   echo "<pre>";
   print_r($combined );



?>