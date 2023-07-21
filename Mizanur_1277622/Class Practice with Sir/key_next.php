<?php 
$Capitals = array("Bangladesh"=>"Dhaka", "Nepal"=>"Kathmundu", "Srilanka"=>"Colombo","Maldives"=>"Maley");
// echo key($Capitals);
// next($Capitals);
// echo "\n";
// echo key($Capitals);
// echo "\n";
while ($Capital = key($Capitals)) {
    echo "$Capital <br>";
    next($Capitals);
}
echo "<br>";
foreach ($Capitals as $country => $capital) {
    echo $country . " : " . $capital . "<br>";
}
?>