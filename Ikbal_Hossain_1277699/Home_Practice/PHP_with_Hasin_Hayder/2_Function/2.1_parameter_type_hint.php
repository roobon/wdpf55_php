<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4> Before php 7 </h4>
<?php 
    function factorial3($n){

        if(gettype($n) != "integer"){
            return "invalid";
        }
        $result = 1;
        for($i = $n; $i > 1; $i--){
            $result *= $i;
        }
        return $result;
    }

    $x = null;  // you can't use a string after using type hinting of int. The argument has to be an integer.
    
    echo "Factorial of {$x} is: " . factorial3($x);

    echo "<hr>";
?>    

</body>
</html>