<?php

    $age = array("Peter"=> 35, "Sadid"=>25, "Jhon"=> 27);
    if (array_key_exists("Sadid", $age)) {
        echo "Yes, exists";
    } else{
        echo "No exists";
    }

    echo "<br>";

    echo array_search(25, $age)

?>