<?php 
$dir = "d:/";
$bytes = disk_free_space($dir);
echo $bytes/1048576/1024;


?>