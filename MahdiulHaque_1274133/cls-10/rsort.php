<?php 
  
  $numbers = array(25, 20, 10, 15, 30);
  $fruits = array("Apple"=>215, "Mango"=>50, "Orange"=>30, "Grape"=>200);
  $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");

  echo "<pre>";
  rsort($numbers);
  print_r($numbers);
  echo "<br>";
  rsort($fruits);
  print_r($fruits);
  echo "<br>"
  rsort($days);
  print_r($days);




?>