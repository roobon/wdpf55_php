<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $number = 999;
    if ($_POST['guess'] == $number) {
        echo "Fuck You";
    } else {
        echo "Sorry";
    }
    ?>

    <form action="" method="post">
        <input type="text" name="guess" placeholder="Guess a Number">
        <input type="submit" value="check">
    </form>
</body>

</html>