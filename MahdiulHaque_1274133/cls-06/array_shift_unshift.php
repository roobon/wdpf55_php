<?php 
 $cars = array("Volvo", "BMW", "Toyota");
 echo "<pre>";
 print_r($cars);
 echo "<hr>";
 array_unshift($cars, "Marcedes", "Audi");
 
 
 print_r($cars);
 echo "<hr>";
 
 array_Shift($cars);
 print_r($cars);




?>