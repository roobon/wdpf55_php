<?php
function directorySize($directory) {
$directorySize=0;
// Open the directory and read its contents.
if ($dh = opendir($directory)) {
// Iterate through each directory entry.
while (($filename = readdir ($dh))) {
// Filter out some of the unwanted directory entries
if ($filename != "." && $filename != "..")
{
// File, so determine size and add to total
if (is_file($directory."/".$filename))
$directorySize += filesize($directory."/".$filename);
// New directory, so initiate recursion
if (is_dir($directory."/".$filename))
$directorySize += directorySize($directory."/".

$filename);

}
}
}
closedir($dh);
return $directorySize;
}
$directory = 'F:\setup7.4.33\htdocs\wdpf55_php\Alauddin_1273850\Handling_file_Uploads\upload';
$totalSize = round((directorySize($directory) / 1048576), 2);
printf("Directory %s: %f MB", $directory, $totalSize);
?>