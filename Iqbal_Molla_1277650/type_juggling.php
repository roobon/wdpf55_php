<h3>type juggling in PHP</h3>
<?php
    $x = 150;
    $y ="20";
    
    $sum = $x + $y ;
    var_dump($sum);
    echo "<br>";

    $p = "15.20";
    $q = 30;

    $result = $p * $q;

    var_dump($result);

    echo "<br>";

    $quantity = "50 cat";
    $quant = 100;

    $total = $quantity + $quant;

    echo $total;
?>