<?php
    $filepath = "myfile.txt";

    $fh = fopen($filepath, "w");
    
    // while(!feof($fh)){
    //     echo fgets($fh). "<br>";
    // }

        fwrite($fh, "some content");

    fclose($fh);
?>