<?php
    echo str_pad("Salad", 10)." is good.";
    echo "<hr>";
?>


<?php
    $header = "Log Report";
    echo str_pad ($header, 20, "=+", STR_PAD_RIGHT);
    echo "<hr>";
?>


<?php
    $header = "Log Report";
    echo str_pad ($header, 20, "=+", STR_PAD_LEFT);
    echo "<hr>";
?>


<?php
    $header = "Log Report";
    echo str_pad ($header, 20, "=+", STR_PAD_BOTH);
    echo "<hr>";
?>


<?php 
    $amount = 53698;
    echo str_pad($amount, 15, "0", STR_PAD_LEFT);
    echo "<hr>";
?>