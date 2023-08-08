<?php 
$asia=["Bangladesh", "Nepal", "Bhutan", "Srilanka"];
$otherworld=["Austrilia", "Naderlands", "England", "Swezerland"];
// $capital = ["Dhaka", "Kathmundu", "Thimpu", "Colombo"];
$merge= array_merge($asia, $otherworld);
print_r($merge);
shuffle($merge);
print_r($merge)


?>