<h3>Type Juggling in PHP</h3>
<?php 
    $x = 100;
    $y = "10";

    $sum = $x + $y ;

    var_dump($sum);
    echo "<br>";

    $p = 50;
    $q = "15.5";

    $result = $p * $q ;
    var_dump($result);
    echo "<br>";

    $txt = "500 Cows";
    $more = 50;

    $total = $txt + $more;

    echo $total;


?>