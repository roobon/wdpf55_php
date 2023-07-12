<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<!-- if else  -->
<?php 

if ( isset($_POST['guess'])){
    $number = 10 ;
if ($_POST['guess'] >= $number ){
    echo "Congrats..!!" ;
} else {
    echo " failed...!! " ;
}
}

?>

<!-- switch case  -->

<?php 

if (isset($_POST['guess'])) {
    switch ( $_POST['guess'] > 10 ){
        echo " Success ";
    } case {
        echo "failed" ;
    }
}

?>


<form action="" method="post">
<input type="text" name="guess" placeholder="guess a number">
<input type="submit" value="CHECK">

</form>

</body>
</html>