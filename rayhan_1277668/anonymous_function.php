<?php 
$x = 15 ;

$example = function () {
    global $x ;                                   
    $x += 100 ;
    echo $x ; 
};
$example();
echo $x ;


                                         
?>


<hr style="background-color:aqua ; height:10px">

<?php 
$message = "Today is Wednesdey" ;
?>