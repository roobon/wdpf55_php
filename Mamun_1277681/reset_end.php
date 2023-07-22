<?php 
$country = ["Dhaka"=>"Bangladesh", "Mosco"=>"Russia" , "cairo"=>"Misor"];
next($country);
echo key($country);
echo current($country);

 echo "<br";
reset($country);

echo key($country);
echo current($country);
 echo "<br";
reset($country);

end($country);
echo current($country)



?>