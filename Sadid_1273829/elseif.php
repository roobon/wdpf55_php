<?php
if (isset($_POST["guess"])) {

    if ($_POST["guess"] >=8) {
        echo "Excillent";
    }elseif($_POST["guess"]>=5) {
        echo "Good";
    }else{
        echo "Poor";
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