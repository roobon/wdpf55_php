<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<!-- switch case  -->

<?php 

if (isset($_POST['guess'])) {

    $guess = $_POST['guess'] ;

    switch ( $guess ){
        case $guess >= 8 ;
        echo " Excellent " ;
        break ;
        case $guess >= 5 ;
        echo " good " ;
        break ;
        case $guess <= 4 ;
        echo " poor " ;
        break ;
        case $guess = 0 ;
        echo " poor " ;
        break ;
        
    
}
}
?>


<form action="" method="post">
<input type="text" name="guess" placeholder="guess a number">
<input type="submit" value="CHECK">

</form>

</body>
</html>