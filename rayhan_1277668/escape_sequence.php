<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $cities["dhaka"] = 250 ;
        $cities["shylet"] = 150 ;
        $cities["Barisal"] = 450 ;

        echo "<pre>" ;

        print_r($cities) ;
        echo "<br>" ;
        var_dump($cities) ;

        echo "we live in Dhaka and population is there {$cities["dhaka"]}" ;

    ?>

</body>
</html>