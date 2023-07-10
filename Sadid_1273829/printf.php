<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
</head>
<body>
    <?php
        $dis_num = 64;
        $temp = 33;
        $name = "Sadid";

        printf("Bangladesh has %d districts.", $dis_num);
        echo "<br>";
        printf("Today's temparature is %f and yesterday was %d", $temp, 34.5);
        echo "<br>";
        printf("%s is a good boy", $name);
    ?>
</body>
</html>