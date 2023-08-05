<?php 
    $x = "Hello";
    $y = "World";

    echo $x; echo $y;
    echo "<hr>";
?>


<?php 
    $x = "Hello ";
    $y = "World";

    echo $x; echo $y;
    echo "<hr>";
?>


<?php 
    $x = "Hello ";
    $y = "World";
    $x = trim($x);

    echo $x; echo $y;
    echo "<hr>";
?>


<?php 
    $x = " Hello ";
    $y = " World";
    $x = rtrim($x);
    // $y = trim($y);

    echo $x; echo $y;
    echo "<hr>";
?>