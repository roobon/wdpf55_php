<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="number" placeholder="Enter a number"> <br>
        <input type="submit" value="Submit">
    </form>

    <?php 
        // print_r($_GET);
        // $_GET["number"];
        echo $_GET["number"];
    ?>
</body>
</html>