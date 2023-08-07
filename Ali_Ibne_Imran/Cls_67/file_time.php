<?php
    ini_set("date.timezone", "Asia/Dhaka");

    $file = 'D:\WDPF_55_WDPF\PHP\htdocs\WDPF55_PHP\Ali_Ibne_Imran\Cls_67/text.txt';
   $atime = fileatime($file);
   $ctime = fileatime($file);
   $mtime = fileatime($file);
    echo "Access time : ".date("h:i:s",$atime)."<br>";
    echo "Change time : ".date("h:i:s",$atime)."<br>";
    echo "Modified time : ".date("h:i:s",$atime)."<br>";

