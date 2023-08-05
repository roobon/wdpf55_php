<?php
    ini_set("date.timezone", "Asia/Dhaka");
    $file = "../Class_Object/score.txt";
    
    $atime = fileatime($file);
    $ctime = fileatime($file);
    $mtime = fileatime($file);

    echo "Access time:" .date("h:i:s", $atime). "<br>";
    echo "Changed time:" .date("h:i:s", $ctime). "<br>";
    echo "Modified time:" .date("h:i:s", $mtime). "<br>";
?>