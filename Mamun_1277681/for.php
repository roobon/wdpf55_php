<?php 
$x = 1;
while($x<=10){
    echo "the numbers is  $x <br>";
$x++;
}

?>

<?php 


{
    for($count = 1; $count<=10; $count++){
        echo "$count squareed is = ".pow($count, 2)."<br>";
    }
  
   
}

?>
<hr>
<?php 

$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

for ($i = 0; $i < count($days); $i++) {
    echo $days[$i] . "<br>";
}


?>