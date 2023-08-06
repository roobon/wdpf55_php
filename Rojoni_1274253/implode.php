<?php
  $cities = array("Columbus", "Akron", "Cleveland", "Cincinnati");
 
$mycities = implode("|", $cities);
echo $mycities;
echo "<br>";
echo strlen($mycities);
echo "<br>";
echo gettype($mycities);
?>