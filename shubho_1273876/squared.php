


<?php
$count = 1;
while ($count < 5) {
    echo $count . " squared = " . pow($count, 2) . "<br>";
    $count++;
}
?>


<?php
for ($i = 0; $i <= 10; $i++) {
    echo $i . " ";
    echo "<br>";
}
?>
<?php
$days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

for ($i = 0; $i < count($days); $i++) {
    echo $days[$i] . "<br>";
}
?>
