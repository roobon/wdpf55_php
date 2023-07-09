<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $name = " Abul Kashem ";
    $age = 20 ;
    $city = "cumilah" ;
    
    ?>

    <p> My name is <?php  echo $name ?> </p>
    <p> My age is <?php print $age ; ?> </p> 
    <?php echo " My city is {$city} " ; ?>  <br> <br>
    
    <?php 
    $x = 5 ;
    $y = 6 ;
    ?>

    <?php 
    echo $x , $y ;
    print $x ;
    print $y ;
    ?>

    


</body>
</html>