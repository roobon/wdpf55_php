<h3 style="text-align: center;">Type Juggling in PHP</h3>
<?php
$x = 75.5;
if (is_numeric($x)) {
    echo "Yes, This is numeric Number";
}

echo "<br>";

$y = false;

echo is_bool($y);
?>