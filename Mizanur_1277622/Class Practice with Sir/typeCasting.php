<?php
$numDec = 16;
var_dump( $numDec );
$numDec = ( double ) $numDec;
//Convert integer to float;
var_dump( $numDec );
echo gettype( $numDec ), '\n';

$txt = "I'm Mizanur Rahman";
var_dump( $txt );
$txt = ( int ) $txt;
//Convert text to integer
var_dump( $txt );

$x = 75.64;
var_dump( $x );
$x = ( integer ) $x;
//Convert float to integer
var_dump( $x );

//Convert a number to an array
$num = 4567;
var_dump( $num );
$num = ( array ) $num;
//Convert number to array
var_dump( $num );
//we can use print_r here
print_r( $num );
?>

<?php
$model = 'Toyota';
$obj = ( object ) $model;
print $obj->scalar;
?>