<form method="post" action="">
	<p><input type="text" name="start" placeholder="Starting Number"></p>
	<p><input type="text" name="end" placeholder="Ending Number"></p>
	<input type="submit" name="submit" value="Prime Numbers">
</form>

<?php
	if(isset($_POST['submit'])) {
	
	$n1 = $_POST['start'];
	$n2 = $_POST['end'];

	for($i = $n1; $i<=$n2; $i++) {
		
		if($i==1) {
			continue;
		}	
		else if ($i==2 || $i==3 || $i==5 || $i==7) {
			echo "$i, "; 
		}
		else if (($i%2)!=0 && ($i%3)!=0 &&($i%5)!=0 && ($i%7)!=0) {
			echo "$i, "; 
		}		
	}
	echo "<h3> above prime numbers are between $n1 and $n2</h3>";
}	
?>

