<?php
    $table = array('<b>' => '<strong>', '</b>' => '</strong>', '<i>'=>'<em>', '</i>'=>'</em>');
    $html = '<b>Today In PHP-Powered News</b>. <i>Today In PHP-Powered News</i>.';
    echo strtr($html, $table);
?>