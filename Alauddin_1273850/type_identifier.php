<?php 
$x = 70;
echo is_integer($x);
echo "<br>";

$x = 75.5;

if (is_numeric($x)){
    echo "Yes, This is a numeric value";
}
echo "<br>";

$y = false;

echo is_bool($y);
?>