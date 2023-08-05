<?php 
$cities = ['Dhaka', 'barisal', 'khulna', 'feni', 'jesore', 'cumilla'];


echo $ar= implode(',', $cities);
echo "<br>";
echo "<br>";
echo "These cities is an ". gettype($ar);
echo "<br>";
echo "<br>";
echo "The size of the string is = ". strlen($ar);


?>