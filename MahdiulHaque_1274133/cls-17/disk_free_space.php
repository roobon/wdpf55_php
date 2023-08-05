<?php 

 $dir = "c:/";
//  echo disk_free_space($dir);
$bytes =  disk_free_space($dir);
echo $bytes/1048576/1024;




?>