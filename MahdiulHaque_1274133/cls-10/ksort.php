<?php 


  $numbers = array(25, 20, 10, 15, 30);
  $fruits = array("Apple"=>215, "Mango"=>50, "Orange"=>30, "Grape"=>200);
  $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
  echo "<pre>";
  print_r($numbers);
  echo "<br>";
  print_r($numbers);
  echo "<br>";
  asort($fruits);
  print_r($fruits);
  echo "<br>";
  ksort($days);
  print_r($days);








?>