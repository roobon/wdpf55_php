<form method="post" action="">
    <input type="date" name="date" placeholder="Select a date"><br><br>
    <input type="submit" name="submit" value="Check">
     
</form>

<?php
	//$date = "2019-01-09";
	if(isset($_POST["submit"])){
        $date = $_POST['date'];

	$d = date("d", strtotime($date)); //Date
	$l = date("l", strtotime($date)); //Weekday
    $m = date("M", strtotime($date)); //Month
	$y = date("Y", strtotime($date)); //Year

echo "$date <br>Year : $y <br> Month : $m <br> Day : $l <br> Date : $d";
    }

?>