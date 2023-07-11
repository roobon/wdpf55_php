<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        // if($_POST["guess"] >= 8){
        //     echo "Excellent";
        // } else if($_POST["guess"] >= 5){
        //     echo "Good";
        // } else {
        //     echo "Poor";
        // }

        if(isset($_POST["guess"])){
            $guess = $_POST["guess"];

            switch($guess){
                case $guess >= 8:
                echo "Excellent";
                break;
                case $guess >= 5:
                echo "Good";
                break;
                case $guess <= 4:
                echo "Poor"; // If you Enter "0" the result will show "excellent" This is the error. Find out the solution
            }

        }
    
    ?>

    <form action="" method="post">
        <input type="text" name="guess" placeholder="Guess a number">
        <input type="submit" value="CHECK">
    </form>
</body>

</html>