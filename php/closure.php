<?php 
ini_set('display_errors', 'off');
$x = 15;

$example = function(){
    global $x;
    $x += 100;
    echo $x;
};
$example(); //calling annonymous function
echo "<br>";
echo $x;

?>

<?php
echo "<hr>";
$message = 'Hello';
$say = function () use($message) {
    echo $message;
};

$say();

?>

<?php
echo "<hr>";
$message = 'Today is Wednesday';
$say = function () use ($message) {  // &$message
	$message = 'Tomorrow is Thursday';
	echo $message."<br>";
};

$say();

echo $message;
