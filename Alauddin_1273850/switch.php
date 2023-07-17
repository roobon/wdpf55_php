<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       if (isset($_POST['guess'])) {
        $guess = $_POST['guess'];

        switch($guess){
            case $guess>=8:
            echo "Exelent!!";
            break;
            case $guess>=5:
            echo "Good!!";
            break;
            default:
            echo "Poor!!";
            break;
        }
        }
    
    ?>



    <form action="" method="post">
        <input type="text" name="guess" placeholder="Guess a number">
        <input type="submit" value="CHECK">
    </form>
</body>
</html>