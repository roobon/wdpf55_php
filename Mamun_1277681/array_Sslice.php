<?php 
$states= ["california", "Miami", "pennsylbaneya", "wiskinson", "ohio", "washinton", "alaska", "colaroda"];
$saliced =  array_splice($states,3, -2 , array("newJersy", "virginia", "minisota", "indiana"));
print_r($states)
?>