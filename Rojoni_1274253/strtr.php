<?php
$table = array('<b>' => '<strong>', '</b>' => '</strong>','<i>'=>'<em>','</i>'=>'</em>');
$html = '<i>Today In PHP-Powered News</i>';
echo strtr($html, $table);
?>