<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter your number"> <br>
        <input type="submit" name="submit" value="CHECKED">
    </form>

    <?php
    // echo $_GET["number"];
        if (isset($_POST["submit"])) {

            $mynum = $_POST["number"];

            if ($mynum % 2 == 0) {
                echo "<h1>{$mynum} is an Even Number</h1>";
            } else {
                echo "<h1>$mynum is a odd Number";
            }
        }
    ?>
</body>

</html>