<?php 

//Constant
define('PI', 3.14159);
echo "Value of PI is " .PI;
echo "\n";
echo "Value of PI is " . constant('PI');
echo "\n";
$constant = 'constant';
echo "Value of PI is = {$constant('PI')}";
echo "\n";
echo "Value of PI is " . PI;
echo PHP_EOL;
var_dump(PI);
?>