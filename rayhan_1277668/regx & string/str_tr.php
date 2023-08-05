<?php
$table = array('<b>' => '<strong>', '</b>' => '</strong>');
$html = '<b>Today In PHP-Powered News</b>';
echo strtr($html, $table);


$table = array(
    'apple' => 'orange',
    'APPLE' => 'ORANGE',
);
$text = 'I have an APPLE and an apple.';
echo strtr($text, $table);
// Output: I have an ORANGE and an orange.


?>


