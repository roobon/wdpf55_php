<?php 

// The rsort() function sorts an indexed array in descending order.

       $numbers = array(5,3,6,8,9);
       echo "<pre>";
       print_r($numbers);
       echo "<br>";
       rsort($numbers);
       
       print_r($numbers);
       echo "<hr>";
       $fuits = array("apple"=>20,"mango"=>50,"orange"=>30);
       echo "<pre>";
       print_r($fuits);
       echo "<br>";
       rsort($fuits);
       
       print_r($fuits);
?>