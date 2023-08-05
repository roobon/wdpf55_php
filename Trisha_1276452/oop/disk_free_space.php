<?php 
$dir = "c:/";
$bytes = disk_free_space($dir);
$gb = $bytes/1048576/1024;
$gb = round($gb, 2);
echo "Total Space: " .$gb . "Gigabyets";

