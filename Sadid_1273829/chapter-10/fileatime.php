<?php

    ini_set('date.timezone', 'Asia/Dhaka');
    $file = "uploads/test.txt";

    $atime = fileatime($file);
    $ctime = filectime($file);
    $mtime = filemtime($file);

    echo "access time : " . date("h:i:s", $atime). "<br>";
    echo "Changed time : " . date("h:i:s", $ctime). "<br>";
    echo "Modified time : " . date("h:i:s", $mtime). "<br>";
?>