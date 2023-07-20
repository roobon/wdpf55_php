<?php 
echo "Numeric Index Array";
echo "<br>";
    $numbers = array(1,2,3,4,5,6,7,8,9,10);
    echo "<pre>";
    print_r($numbers);
    echo "<hr>";
?>
<?php
echo "Associative Array";
echo "<br>";
    $age = array("Imran"=>"25", "Masum"=>"26", "Shakib"=>"24");
    
    print_r($age);
    echo "<hr>";
?>
<?php
echo "Multidimensional Array";
echo "<br>";
    $fruits = array (
    array("Rose",22,18),
    array("Tulip",15,13),
    array("Bely",5,2),
    );
    
    print_r($fruits);
    
?>