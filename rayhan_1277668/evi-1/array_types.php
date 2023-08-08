<?php 
// numeric index array
$numeric_array = [ "hashem"=>30 , " kashem" , "mizan", 20 , 57  ];
echo "Numberic Array" ;
echo "<pre>" ;
print_r($numeric_array) ;

echo "<hr>" ;


// assosiative array
$associative_array = [ "Bat"=>5000 , "Ball"=>50 , "Stamp" => 200  ];
echo "Numberic Array" ;
echo "<pre>" ;
print_r($associative_array) ;

echo "<hr>" ;


// multidimentional array
$multidimentional_array = array (
    "Kohli" => array ( "OverAll"=>91 ,  "Skill"=> "Batsman" ),
    "Mashrafe" => array ( "OverAll"=>96 ,  "Skill"=> "Bowler" ),
    "Sakib" => array ( "OverAll"=>98 ,  "Skill"=> "All-Rounder" ),
) ;
echo "multidimentional Array" ;
echo "<pre>" ;
print_r($multidimentional_array) ;

echo  $multidimentional_array["Mashrafe"]["Skill"];

echo "<hr>" ;

$numbers = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]
];

print_r($numbers)

?>