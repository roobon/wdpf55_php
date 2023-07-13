<?php 
    if (isset($_POST['guess'])) {
        $number = 999;
    if($_POST['guess'] ==$number){
        echo "Congratulation!!";
    } else{
        echo "sorry!";
    }
    }
    
?>
    

<form action="" method="post">
<input type="text" name="guess" placeholder="Guess a number">
<input type="submit" value="CHECK">
</form>

