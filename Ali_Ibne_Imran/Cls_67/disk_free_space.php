<?php
    $drive = 'd:/';
    $byte = disk_free_space($drive);
    echo $byte/1024/1024/1024;
?>