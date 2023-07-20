<?php 

$numeric_array = [ "hashem" , " kashem" , "mizan", 20 , 57  ];
echo "Numberic Array" ;
echo "<pre>" ;
var_dump($numeric_array) ;

echo "<hr>" ;


$associative_array = [ "Bat"=>5000 , " Ball"=>50 , "Stamp" => 200  ];
echo "Numberic Array" ;
echo "<pre>" ;
var_dump($associative_array) ;

echo "<hr>" ;


$multidimentional_array = array (
    "Kohli" => array ( "OverAll"=>91 ,  "Skill"=> "Batsman" ),
    "Mashrafe" => array ( "OverAll"=>96 ,  "Skill"=> "Bowler" ),
    "Sakib" => array ( "OverAll"=>98 ,  "Skill"=> "All-Rounder" ),
) ;
echo "multidimentional Array" ;
echo "<pre>" ;
var_dump($multidimentional_array) ;

echo  $multidimentional_array["Mashrafe"]["Skill"];

echo "<hr>" ;

?>