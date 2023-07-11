<?php

    $x = "Hello";

    $y = &$x;
    $y = "World";

    echo $y;

    Echo "<br>";

    echo $y;

    Echo "<br>";
    echo $x;

?>