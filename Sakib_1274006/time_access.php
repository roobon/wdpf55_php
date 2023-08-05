<?php
 ini_set('date.timezone', 'Asia/Dhaka');

 $file = 'D:\php\htdocs\wdpf55_php\Sakib_1274006\uploads\753741.jpg';
 $atime = fileatime($file);
 $ctime = fileatime($file);
 $mtime = fileatime($file);

 echo "Access time:" .date("h:i:s", $atime). "<br>";
 echo "Changed time:" .date("h:i:s", $ctime). "<br>";
 echo "Modifyed time:" .date("h:i:s", $mtime). "<br>";


?>
