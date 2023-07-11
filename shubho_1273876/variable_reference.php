<h3 style="text-align: center;">Type Juggling in PHP</h3>
<?php
$x = "HELLO";
$y = &$x;  // & means reference
$y = $x;
$y = "World";

echo "$y";
echo "<br>";
echo "$x";

?>