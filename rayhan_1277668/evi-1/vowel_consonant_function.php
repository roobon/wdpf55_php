<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

function checkLetter ($x) {
    $vowel = ["a" , "A" , "e" , "E", "i" , "I", "o", "O", "u", "U"  ] ;

    

    if (in_array( $x , $vowel)) {
        echo  "This is vowel" ;
    } else {
        echo "This is consonant" ;
    }
}

if ( isset($_GET['letter']) ) {
    $letter =  $_GET['letter'] ;
    $letter = strtolower($letter) ;
    echo checkLetter($letter) ;
}

?>

<form action="">
<input type="text" name="letter" placeholder="Enter a letter">  <br>

<input type="submit" name="submit" value="CHECK">
</form>

</body>
</html>