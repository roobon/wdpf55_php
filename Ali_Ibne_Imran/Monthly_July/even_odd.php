<form method="post" action="">
	<p><input type="text" name="start" placeholder="Starting Number"></p>
	<p><input type="text" name="end" placeholder="Ending Number"></p>
	<input type="submit" name="submit" value="Odd/Even Numbers">
	
</form>


<?php
	if(isset($_POST['submit'])) {
	
	$n1 = $_POST['start'];
	$n2 = $_POST['end'];
	echo "<h2> Below Odd and Even numbers are between $n1 and $n2</h2>";
	function EvenOdd($x1,$x2){
        for($i = $x1; $i<=$x2; $i++) {
		
            if ($i%2==0) {
                echo "<p>$i is an Even number</p>"; 
            }
            else {
                echo "<p>$i is an Odd number</p>"; 
            }			
	    }	
    }EvenOdd($n1,$n2);
}	
?>