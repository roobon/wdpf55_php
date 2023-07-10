<?php 
    $x = 15;
    echo is_integer($x);
    echo "<br>";
    echo is_numeric($x);
    echo "<br>";

    if(is_numeric(($x))){
        echo "Yes, This is a numeric value";
    }else{
        echo "No, This is not a numeric value";
    }

?>