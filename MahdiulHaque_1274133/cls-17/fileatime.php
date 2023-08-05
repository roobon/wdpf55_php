<?php

ini_set('date.timezone', 'Asia/Dhaka');
$file = 'C:\Users\C-17\Desktop\WDPF_55WDPF\PHP\htdocs\WDPF_55_PHP\MahdiulHaque_1274133\Cls-15\123.docx';

$atime = fileatime($file);
$ctime = filectime($file);
$mtime = filemtime($file);

 echo "Access time:"  .date("h:i:s", $atime). "<br>";

 echo "Changed time:"  .date("h:i:s", $ctime). "<br>";

 echo "Modified time:"  .date("h:i:s", $mtime). "<br>";











        //   dekhte hobe sirerta//


?>