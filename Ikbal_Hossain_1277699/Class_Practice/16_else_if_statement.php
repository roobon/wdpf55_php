<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        if($_POST["guess"] >= 8){
            echo "Excellent";
        } else if($_POST["guess"] >= 5){
            echo "Good";
        } else {
            echo "Poor";
        }
    
    ?>

    <form action="" method="post">
        <input type="text" name="guess" placeholder="Guess a number">
        <input type="submit" value="CHECK">
    </form>
</body>

</html>