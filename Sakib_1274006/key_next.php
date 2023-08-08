<?php 

$rajdhani = array(
    "Dhaka"=>"Bangladesh",
    "USA"=>"Newyork",
    "Maldeep"=>"Malee",
);
echo key($rajdhani);
next ($rajdhani);
echo "<br>";
echo key($rajdhani);
echo"<hr>";

// while($key = key($rajdhani)){
//     echo "$key <br>";
//     next($rajdhani);
// }

echo"<hr>";

while($value = current($rajdhani)){
    echo "$value <br>";
    next($rajdhani);
}
echo"<hr>";

foreach ($rajdhani as $city => $rajdhani){
    echo $city . ", ";
}

echo"<hr>";



?>