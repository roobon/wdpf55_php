<?php
$table = array('<b>' => '<strong>', '</b>' => '</strong>', '<i>'=>'<em>' ,'</i>'=>'</em>');
$html = '<b>Today In PHP-Powered News</b>';
echo strtr($html, $table);
?>