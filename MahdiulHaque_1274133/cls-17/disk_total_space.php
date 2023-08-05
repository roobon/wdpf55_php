<?php 

 $dir = "e:/";
//  echo disk_free_space($dir);
$bytes =  disk_total_space($dir);
$gb =  $bytes/1048576/1024;
$gb = round($gb, 2);
echo "Total Space: ". $gb .  " Gigabytes";





?>