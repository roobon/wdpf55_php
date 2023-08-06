<?php 
ini_set('date.timezone' , 'Asia/Dhaka') ;


$file = 'files.txt' ;
$atime = fileatime($file);
$ctime = filectime($file);
$mtime = filemtime($file);


echo "Access Time: " .date("h:i:s", $atime). "<br>" ;
echo "Changed Time: " .date("h:i:s", $ctime). "<br>" ;
echo "Modified Time: " .date("h:i:s", $mtime). "<br>" ;


?>