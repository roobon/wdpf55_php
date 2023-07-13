<?php 
    $x = "Hello";
    $y = &$x;
    $y = "World";


    echo $y;
    echo "<br>";
    echo $x


?>