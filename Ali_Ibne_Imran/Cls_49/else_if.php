<form action="" method="post">
        <input type="text" name="guess" placeholder="Guess number">
        <input type="submit" value="Check">
</form>
    <?php
        if(isset($_POST['guess'])){
            // $number = 999;
            if($_POST['guess']>=8){
                echo "Excellent";
            }else if($_POST['guess']>=5){
                echo "Good";
            }else {
                echo "Poor";
            }
        }   
    ?>