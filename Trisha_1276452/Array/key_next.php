<?php 
$countries = array("Dhaka"=>"Bangladesh","Kathmundu"=>"Nepal","Colombo"=>"Srilanka","Maley"=>"Maldives");

echo key($countries);
next($countries);
echo "<br>";
echo key($countries);
echo "<hr>";

while($key = key($countries)){
    echo "$key <br>";
    next($countries);


}
echo "<br>";

foreach($countries as $city=>$countries){
    echo $city . ",";
}
?>