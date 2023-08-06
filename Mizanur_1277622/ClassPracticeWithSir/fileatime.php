<?php
ini_set("date.timezone", "Asia/Dhaka");
$file = 'directorysize.php';
$atime = fileatime($file);
$ctime = filectime($file);
$mtime = filemtime($file);
echo "Access time: " . date("h:i:s", $atime) . "<br>";
echo "Changed time: " . date("h:i:s", $ctime) . "<br>";
echo "Modified time: " . date("h:i:s", $mtime) . "<br>";
printf("File last accessed: %s", date("m-d-y g:i:sa",fileatime($file)));
echo "<hr>";
printf("File last accessed: %s", date("m-d-y h:i:sa",fileatime($file)));


?>