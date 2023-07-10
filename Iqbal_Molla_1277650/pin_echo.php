<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Iqbal Molla";
    $age = 27;
    $form = "Madaripur";
    $education = "National University";
    $subject = "Political Science"
    ?>
    <p>Name is <?php echo $name; ?></p>
    <p>Age is <?php echo $age; ?></p>
    <P>From <?php echo $form; ?></P>
    <P>Education form <?php echo $education; ?></P>
    <P>Subject <?php echo $subject; ?></P>


    <?php
        $x = 5;
        $y = 6;
        echo ($x); //we can brackets
        echo $x, $y; // Echo can print multiple variable using comma
        print($x);  //We cam using brackets
    ?>
</body>
</html>