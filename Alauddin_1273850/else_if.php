<?php 
    if (isset($_POST['guess'])) {
    if($_POST['guess']>=8){
        echo "Exellent!!";
    } else if($_POST['guess']>=5){
        echo "Good!!";
    } else {
        echo "Poor!!";
    }
    }
    
?>
    

<form action="" method="post">
<input type="text" name="guess" placeholder="Guess a number">
<input type="submit" value="CHECK">
</form>

