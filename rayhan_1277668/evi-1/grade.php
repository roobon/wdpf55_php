<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    if ( isset(  $_GET['number']  ) ) {
        $myNumber =  $_GET['number']  ;
        
        
        if ( $myNumber == "a"   ) {
            echo " Exelent " ;
        } elseif ( $myNumber == "b" ) {
            echo " Good ";
        }  elseif ( $myNumber == "c" ) {
            echo " Fair ";
        } elseif ( $myNumber == "d" ) {
            echo " Poor ";
        } else {
            echo " failure ";
        }
    }

?>    

<form action="">
<input type="text" name="number" placeholder="Enter Grading Letter"> <br>

<input type="submit" value="check">

</form>


</body>
</html>