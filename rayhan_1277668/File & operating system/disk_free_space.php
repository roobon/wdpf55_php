<?php 
$dir = "c:/" ;
$bytes = disk_free_space($dir) ;

$gb = $bytes/(1024*1024*1024)   ;
$GB = round($gb , 2) ;
echo  "Free GB Available  " . $GB ;




?>