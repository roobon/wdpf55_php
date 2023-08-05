<?php 
$dir = 'c:/';
$bytes= disk_total_space($dir);
$gb= "Total space of E folder ". $bytes/1048576/1024;
$gb = round($gb);
echo  $gb ."Gigabyte";

?>