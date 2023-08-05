    <?php
    function directorySize($directory) {
    $directorySize=0;
    // Open the directory and read its contents.
        if ($dh = opendir($directory)) {
        // Iterate through each directory entry.
            while (($filename = readdir ($dh))) {
            // Filter out some of the unwanted directory entries
                if ($filename != "." && $filename != ".."){
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

    $directory = 'D:\WDPF_55_WDPF\PHP\htdocs\WDPF55_PHP\Ali_Ibne_Imran';
    $totalSize = round((directorySize($directory) / 1048576), 2);
    echo  "$totalSize MB";
?>