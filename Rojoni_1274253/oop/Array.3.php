<?php 
// Numeric array


$name = array("Tisha","Rojoni","Mamun","Sadid","Iqbal");
echo "<pre>";
var_dump($name);
echo "<hr>";



// Associative Array


$name = array ("Tisha"=>22,"Rojoni"=>24,"Mamun"=>23,"Iqbal"=>25);
print_r($name);
echo "<hr>";

// Multidimentional Array



$students=array(
    "Tisha"=>array("email"=>"tisha@gmail.com","phone"=>"01786677"),
    "Rojoni"=>array("email"=>"rojoni@gmail.com","phone"=>"0178l677"),
    "Mamun"=>array("email"=>"mamun@gmail.com","phone"=>"0178l677"));
    print_r($students);





?>