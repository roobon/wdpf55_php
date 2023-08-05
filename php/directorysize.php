<?php
function directorySize($directory) {
$directorySize=0;
if ($dh = opendir($directory)) {

while (($filename = readdir ($dh))) {
if ($filename != "." && $filename != "..")
{

if (is_file($directory."/".$filename))
$directorySize += filesize($directory."/".$filename);

if (is_dir($directory."/".$filename))
$directorySize += directorySize($directory."/".
$filename);
}
}
}
closedir($dh);
return $directorySize;
}

// path define and function calling
$directory = 'H:\xampp743\htdocs\wdpf55_php\php\upload';
$totalSize = round((directorySize($directory) / 1048576), 2);

echo $totalSize . "MB";

?>