<?php 
    $a = 1;
    while ($a <= 10) {
       echo "My Number: $a<br>";
       $a++;
    }

?>

<hr>
<?php
$count = 1;
while ($count < 5) {
///printf("%d squared = %d <br>", $count, pow($count, 2));
echo "$count squared ";
echo pow($count, 2); 
echo "<br>"; 
$count++;
}
?>