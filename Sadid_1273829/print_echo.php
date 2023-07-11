<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>echo vs print</title>
</head>
<body>
    <?php
        $name = "Sadid";
        $age = 24;
        $city = "Dhaka";
        $from = "Mymensingh";
    ?>

    <p>My name is <?php echo $name; ?></p>
    <p>Age is <?php echo $age ?> </p>

    <?php echo "<p>Hi! My name is {$name} & I live in {$city}</p> " ?>
</body>
</html>