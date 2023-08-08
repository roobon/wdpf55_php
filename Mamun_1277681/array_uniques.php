<?php 

 $cities =["NewYork", "arizona", "Miami", "Washinton", "Ohaio", "penslibanya", "Miami", "NewYork" ];
 $uniqueArray = array_unique($cities);
 print_r($uniqueArray);
 echo count($uniqueArray);
 echo count($cities);
?>