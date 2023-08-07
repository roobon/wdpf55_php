<?php
 $cities = array("Dhaka", "Rajshahi", "Pabna", "Nator");
 echo "<pre>";
 echo print_r($cities);
 echo "<hr> ";

 $stig = implode(", ", $cities);
 echo "<hr>";
 echo "sizeof  ";
 echo sizeof($cities);
 echo "<hr> ";
 echo "count  ";
 echo strlen($stig);

?>