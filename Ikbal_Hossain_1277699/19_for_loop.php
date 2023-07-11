<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3> Find the output 1 to 10 using for loop </h3>
    <?php
        for ($i = 0; $i <= 10; $i++) {
            // echo"My Number: $i<br>";
            echo "My Number: $i" . "<br>";
        }
    ?>

    <h3> Array showing using for loop </h3>
    <?php
    
        $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        echo "<ol>";
        for ($i = 0; $i < count($days); $i++) {
            echo "<li>" . $days[$i] . "</li>";
        }
        "</ol>";
    ?>
</body>

</html>