<?php 
$x = "Hello";

$y = & $x;

$y = "World";

echo $x; echo $y;
echo "<br>";

?>