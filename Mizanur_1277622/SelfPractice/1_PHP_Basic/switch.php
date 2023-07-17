<?php 
$n = 45;
$r = $n % 2;

switch ($r) {
    case 0:
        echo "$n is an even number";
        break;
    
    default:
        echo "$n is an odd number";
        break;
}
echo PHP_EOL;
$color = "blue";
switch ($color) {
    case 'red':
        echo "It's red color";
        break;
    case 'green':
        echo "It's green color";
        break;
    case 'blue':
        echo "It's blue color";
        break;
    case 'yello':
        echo "It's yello color";
        break;
    
    default:
        echo "I'm not sure it's a color or not!";
        break;
}
?>