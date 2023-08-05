<?php
    $drive = 'd:/';
    $byte = disk_total_space($drive);
    $gb = $byte/1024/1024/1024;
    $gb = round($gb,2);
    echo "Total space $gb GB";
?>