<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = "Mizanur Rahman";
        $age = 25;
        $education = "Graduate";
        $dist = "Barisal";
    ?>
    <p>My name is <?php echo $name;?></p>
    <p>I'm <?php echo $age;?> years old.</p>
    <p>He <?php echo $education;?> at Finance & Banking</p>
    <p>He is from <?php echo $dist?></p>

    <?php 
        $x = 5;
        $y = 6;
    
        echo $x +  $y;
    ?>
</body>
</html>