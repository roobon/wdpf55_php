<?php 
$countries = array ("Dhaka"=>"Bangladesh","Katmundu"=>"Napal","Colombo"=>"Srilanka","Maley"=>"Maldives");
// echo key ($countries);
// next ($countries);
// echo "<br>";
// echo key ($countries);
// echo "<br>";



while($value = current($countries)){
    echo "$value <br>";
    next($countries);
}

echo "<br>";
echo "<hr>";


foreach($countries as $city=>$countries){
    echo $countries . ",";

}




?>