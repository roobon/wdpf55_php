<?php
$x = "Hello";
$y =& $x;
$y = "World";

echo $y;
echo PHP_EOL;
echo $x;