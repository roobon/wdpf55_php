<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    if (isset($_REQUEST['submit'])) {
        $num = $_REQUEST['number'];

        if ($num % 2 == 0) {
            echo "$num is a even number";
        } else {
            echo "$num is a odd number";
        }
    }
?>
<body>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Input a number">
        <input type="submit" name="submit" value="check">
    </form>
</body>
</html>