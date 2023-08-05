<?php
    function directorySize($directory){
        $directorySize = 0;

        if ($dh = opendir($directory)){
            while ($filename = readdir($dh)) {
                if ($filename != "." && $filename != "..") {
                    if (is_file($directory."/".$filename)){
                        $directorySize += directorySize($directory."/".$filename);
                    }
                }
            }
        }
        closedir($dh);
        return $directorySize;
    }

    $directory = 'e:/';

    $totalSize = round(directorySize($directory)/1048576, 2)
?>