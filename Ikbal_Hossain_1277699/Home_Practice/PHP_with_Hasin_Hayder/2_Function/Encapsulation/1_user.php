<?php
    include_once "1_function.php";

    $x = 1277699;

    $check = isEven($x);

    if (isEven($x)) {
        echo "$x is an even number";
    } else {
        echo "$x is an odd number";
    }
    
 ?>