<?php
    $file = "text.txt";
    // Open a text file for reading purposes
    $fh = fopen($file, "r");
    // While the end-of-file hasn't been reached, retrieve the next line
    while (!feof($fh)) {
        echo fgets($fh)."<br>";
    }
    
    // Close the file
    fclose($fh);
?>