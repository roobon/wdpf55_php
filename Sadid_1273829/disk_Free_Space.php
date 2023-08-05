<?php
    $dir = "c:/";

    $bytes = disk_free_space($dir);
    $free_Space =  $bytes/1024/1024/1024;
    
    $byte = disk_total_space($dir);
    $total_Space =  $byte/1024/1024/1024;

    $use_space = $total_Space - $free_Space;

    echo $use_space;
?>