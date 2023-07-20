<?php 
$Capitals = array("Bangladesh"=>"Dhaka", "Nepal"=>"Kathmundu", "Srilanka"=>"Colombo","Maldives"=>"Maley");
while ($value = current($Capitals)) {
    echo "$value <br>";
    next($Capitals);
}
?>