<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ( isset( $_POST['number'] ) ) {
        $number = $_POST['number'] ;

       echo $number % 2 == 0 ? "Even number" : "Odd number" ;
    }

    ?>


    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter a number"> <br>

        <input type="submit" name="submit" value="SUBMIT">

    </form>
</body>

</html>