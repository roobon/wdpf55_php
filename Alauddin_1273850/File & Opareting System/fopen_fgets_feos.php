<?php

    $filepath = "upload/test.txt";
    $fh = fopen($filepath, 'a+');

    while(!feof($fh)){
        echo fgets($fh) . "<br>";
    }

    fwrite($fh, "\nI can't catch anything");

    fclose($fh);



?>