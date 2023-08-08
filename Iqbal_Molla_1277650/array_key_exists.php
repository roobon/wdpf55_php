<?php
    $age = array("Peter"=> "35", "Ben"=> "37", "Joe"=> "40");

    if(array_key_exists("Peter", $age)){
        echo "yes, exits";
    } else{
        echo "No exist";
    }
?>