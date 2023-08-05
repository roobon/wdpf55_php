<!-- <?php
    // Open a text file for reading purposes
    $fh = fopen('/home/www/data/users.txt', 'r');
    // While the end-of-file hasn't been reached, retrieve the next line
    while (!feof($fh)) echo fgets($fh);
    // Close the file
    fclose($fh);
?> -->

<!-- <?php 
    $filepath = "Upload/test.txt";
    $fh = fopen($filepath, "r");
    echo fgets($fh);

    fclose($fh);
?> -->

<!-- <?php 
    $filepath = "test.txt";
    $fh = fopen($filepath, "r");
    while(!feof($fh)){
        echo fgets($fh) . "<br>";
    }

    fclose($fh);
?> -->


<!-- <?php 
    $filepath = "test.txt";
    $fh = fopen($filepath, "a+");
    while(!feof($fh)){
        echo fgets($fh) . "<br>";
    }
    fwrite($fh, "\n Adding another line");

    fclose($fh);
?> -->