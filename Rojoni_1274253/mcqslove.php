<?php 
$states = array("Florida");

$state = "Ohio";

printf("\$states is an array: %s <br />", (is_array($states) ? "TRUE" : "FALSE"));

 $numbers =range(1,6);
 print_r( $numbers );

 $states = array("Ohio", "New York");

array_unshift($states, "California", "Texas");

echo "<hr>";
$array = array("size" => "XL", "color" => "GOLD");
print_r(array_values($array));



echo "<hr>";
$fruits = array ("apple", "orange", "banana"); 

 echo (next($fruits));	    
 echo (next($fruits));

 echo "<hr>";
 $r[1]="r";
 $r[2]="k";
 $r[29]="l";
 print_r($r);


?>