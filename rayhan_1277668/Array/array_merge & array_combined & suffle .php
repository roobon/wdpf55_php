<?php 

$asia = ["Bangladesh" , "Nepal" , "Srilanka", "Bhutan"];
$other = [ " Austaralia" , "Netherland", "Canada", "England" ] ;


$merged = array_merge($asia , $other) ;
$combined = array_combine($asia , $other) ;
$shuffled = shuffle($combined) ;
// $shuffled = array_rand($combined) ;


echo" <pre> " ;
print_r($merged) ;

print_r($combined) ;
print_r($shuffled) ;


?>