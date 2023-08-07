<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        if(isset($_POST["submit"])){

        $letter = strtoupper($_POST["letter"]);
        $grade = $letter;
        // $grade = array("A", "B", "C", "D", "F");
        if ($grade == "A") {
            echo "excellent";
        } else if ($grade == "B") {
            echo "good";
        } else if ($grade == "C") {
            echo "fair";
        } else if ($grade == "D") {
            echo "poor";
        } else if ($grade == "E")
            echo "failure";
        } else {
            echo "Invalid Input";
        }
       
    ?>

    <form action="" method="post">
        <input type="text" name="letter" placeholder="Enter A, B, C, D, E, F ">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>

</html>