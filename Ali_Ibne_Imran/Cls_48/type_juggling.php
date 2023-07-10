<?php
    $x = 5; // an integer
    $y = "15"; // a string
    echo "x = ".$x.", "."y = ".$y;
    echo "<br>";
    $total = $x + $y; // $total = 20 (an integer)
    echo $total;

    echo "<br>";
?>
<?php
    $x = "45 fire engines";
    $y = 10;
    $total = $x + $y; // 55
    echo $total;

    echo "<br>";
    $x = "fire engines 45";
    $y = 10;
    $total = $x + $y; // 55
    echo $total;
    echo "<br>";

?>
<?php
    $val1 = "1.2e3"; // "1200"
    $val2 = 2;
    echo $val1 * $val2; // outputs 2400 as 1.2e3 as a float is1200
?>