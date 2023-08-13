<?php 

$current = time();
$data = getdate($current);
echo "<pre>";
print_r($data);
echo "<br>";
$current = 458748412;
echo date("d-F-Y h:i:sa", $current);
echo "<br>";
echo mktime(20,35,00,1,22,2018);
$dob = "01 05 1990";
mktime(00, 00, 00, 01, 05, 1990);

?>

<?php 
$terminationDate = new DateTime('2018-05-30');
$todaysDate = new DateTime('today');
$span = $terminationDate->diff($todaysDate);
echo "Your subscription ends in {$span->format('%a')} days!";
?>
<?php 
$date = new DateTime("May 25, 2018 00:33");
$date->modify("+27 hours");
echo $date->format("Y-m-d h:i:s");
?>