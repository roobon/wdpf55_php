<?php 
  $fuits = array("apple"=>20,"mango"=>50,"orange"=>30,"lemon"=>40);
  echo "<pre>";
  print_r($fuits);
  echo "<br>";
  $random = array_rand($fuits,2); //pick any two item
  print_r($random);

?>