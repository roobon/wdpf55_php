<?php
 $table = array('<b>' => '<strong>', '</b>' => '</strong>');
 $table1 = array('<b>' => '<i>', '</b>' => '</i>');
 $table2 = array('<b>' => '<h1>', '</b>' => '</h1>');
 $html = '<b>Today In PHP-Powered News</b>';
 echo strtr($html, $table);
  echo "<br>";
 echo strtr($html, $table1);
 echo "<br>";
 echo strtr($html, $table2);
?>