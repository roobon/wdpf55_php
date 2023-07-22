<?php 

 //Numaric indexed Array

 $fruits = array("Mango","Jackfruit","Guava","Wood-Apple");
 
 echo "<pre>";
 var_dump($fruits);
 echo "<br>";
 
 //Assosiative Array

 $Flower = array("Lily"=> "Bangladesh", "Lotus"=>"India","Rose"=>"USA",);
 print_r($Flower);
 echo "<br>";

 //Multidimentional Array
 $information = array
 ("Nadia"=>array("email"=>"nadia@gmail.com","phone"=>"1995086506"),
 "Rojoni"=>array("email"=>"rojoni@gmail.com","phone"=>"0176856789"),
 "Sifati"=>array("email"=>"sifati@gmail.com"));
 print_r($information);

?>
