<?php
    if (isset($_POST["guess"])) {
        switch ($_POST["guess"]) {
            case ($_POST["guess"]>=8):
                echo "Excillent";
                break;
            case ($_POST["guess"]>=5):
                echo "Good";
                break;
            
            default:
                echo "Poor";
                break;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch case</title>
</head>
<body>
<form action="" method="post">
        <input type="number" name="guess" placeholder="Guess the number">
        <button type="submit">Check</button>
    </form>
</body>
</html>