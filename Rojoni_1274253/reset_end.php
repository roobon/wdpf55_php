<?php 
$countries = array ("Dhaka"=>"Bangladesh","Katmundu"=>"Napal","Colombo"=>"Srilanka","Maley"=>"Maldives");


next($countries);

echo key($countries);
echo current($countries);
echo "<hr>";


reset($countries); 
echo key($countries);
echo current($countries);


end($countries);
echo "<hr>";
echo key($countries);
echo current($countries);



prev($countries);
echo "<hr>";
echo key($countries);
echo current($countries);



?>