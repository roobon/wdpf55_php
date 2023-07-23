<?php 

    $fruits = array("Apple"=>215, "Mango"=>50, "Orange"=>30, "Grape"=>200);

    echo "<pre>";    
    print_r($fruits);
    echo "<br>";
    $picked = array_rand($fruits, 2);
    echo "<br>";
    print_r($picked);
    


?>