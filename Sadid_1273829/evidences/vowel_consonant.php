<?php

    if (isset($_REQUEST['submit'])) {
        $arr = ["a", "e", "i", "o", "u"];
        $vowel = strtolower($_REQUEST['vowel']);

        if (in_array($vowel, $arr)) {
            echo "Vowel";
        } else {
            echo "consonant";
        }
    }    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="vowel">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>