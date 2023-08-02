<?php 
  $country = array(
    "India"=>"Delhi",
    "Pakistan"=>"Islamabad",
    "Srilanka"=>"Colombo",
    "Nepal"=>"Kathmandu",
    "Bhutan"=>"Thimpu",
    "Bangladesh"=>"Dhaka",
  );
   ksort($country);
   echo "<pre>";
   print_r($country);
   foreach($country as $key => $value){
    echo "Country is $key and capital is $value <br>";
   }






?>