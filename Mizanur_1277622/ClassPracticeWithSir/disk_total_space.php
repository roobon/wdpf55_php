<?php 
$dir = "e:/";
$bytes = disk_total_space($dir);
$gb = $bytes/1048576/1024;
$gb = round($gb, 2);
echo "Total space of $dir is " . $gb . " GB";


?>