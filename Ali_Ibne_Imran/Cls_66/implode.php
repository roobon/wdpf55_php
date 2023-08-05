<?php
    $cities = array("Dhaka", "Barisal", "Khulna", "Chottogram");
    echo "<pre>";
    print_r($cities);
    echo "</pre>";
    echo "<hr>";
    $string = implode("--", $cities); 
    echo $string;
    echo "<hr>";
    echo "<pre>";
    print_r($string);
    echo "</pre>";
    echo "<hr>";
    echo strlen($string);
    

?>