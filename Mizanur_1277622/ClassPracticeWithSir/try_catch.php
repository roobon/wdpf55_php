<?php
try {
    $fh = fopen("my.txt", "r");
        if (!$fh) {
            throw new Exception("File not found");
        }
    } catch (Exception $error) {
            echo "<pre>";
            var_dump($error);
            echo "<br>";
            echo $error->getMessage();
            echo "<br>";
            echo $error->getLine();
            echo "<br>";
            echo $error->getFile();
}
?>