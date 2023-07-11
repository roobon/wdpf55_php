<?php
if (isset($_POST["guess"])) {
    $number = 123;

    if ($_POST["guess"] == $number) {
        echo "Congratulation!";
    }else {
        echo "Sorry! You guess the wrong number";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else in php</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="guess" placeholder="Guess the number">
        <button type="submit">Check</button>
    </form>
</body>
</html>