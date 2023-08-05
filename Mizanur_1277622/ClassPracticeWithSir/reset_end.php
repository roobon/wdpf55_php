<?php 
$Capitals = array("Bangladesh"=>"Dhaka", "Nepal"=>"Kathmundu", "Srilanka"=>"Colombo","Maldives"=>"Maley");
next($Capitals);
echo key($Capitals);
echo "\n";
echo current($Capitals); //current send the value.
echo "\n";

reset($Capitals);
echo key($Capitals);
echo "\n";
echo current($Capitals);

end($Capitals);
echo "\n";
echo key($Capitals);
echo "\n";
echo current($Capitals);


prev($Capitals);
echo "\n";
echo key($Capitals);
echo "\n";
echo current($Capitals);

?>