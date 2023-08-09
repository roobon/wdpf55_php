<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    define("USER", "Masum");
    echo USER . " ";

    define("USER1", "Sona");
    echo USER1;
    echo "<hr>";

    
    Const DOMAIN = "w3schools";
    echo DOMAIN;
    echo "<hr>";

    ?>

    <?php 
        // case-sensitive constant name
        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;
        echo "<hr>";
    ?>


<?php
    // case-insensitive constant name
    define("GREETING", "Welcome to W3Schools.com!");
    echo greeting;
    echo "<hr>";
?> 
</body>
</html>