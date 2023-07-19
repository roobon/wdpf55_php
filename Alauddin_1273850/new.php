<?php    
$score = 1234;    
$scoreboard = (array) $score;    
echo $scoreboard[0];  
echo "<br>";

// while() {
//     echo "hello ";
// }

?>
<?php    
$num  = 1;    
$num1 = 2;    
print $num . "+". $num1;
echo "<br>";    
?>
<?php    
$a = "clue";    
$a .= "get";   
 echo "$a";  
 echo "<br>";  
?>
<?php    
$a = 5;    
$b = 5;    
echo ($a === $b);
echo "<br>";    
?>
<?php    $num = 10;    

echo 'What is her age? \n She is $num years old';
echo "<br>";    
?>
<?php
$a = 100;
if ($a > 10)
    print("PHP Quiz");
else if ($a > 20)
    print("PHP MCQ");
else if($a > 30)
    print("PHP Program");
    echo "<br>";
?>
<?php
$mcq = 1;
switch(print $mcq)
{
case 2:
    print "HTML";
    break;
case 1:
    print "CSS";
    break;
default:
    print "JavaScript";
}
echo "<br>";
?>
<?php
// define("GREETING", "PHP is a scripting language");
// echo $GREETING;
?>
<?php    
$total = "25 students";    
$more = 10;    
$total = $total + $more;    
echo "$total";
echo "<br>";    


$x = 15;
$y = 20;
if($x<++$x || $y<++$y){
    echo "hello World";
} else{
    echo "Hii everyone";
}


?>

