<form action="" method="post">
        <input type="text" name="guess" placeholder="Guess number">
        <input type="submit" value="Check">
</form>
    <?php
        if(isset($_POST['guess'])){
            $number = 999;
            if($_POST['guess'] ==$number){
                echo "Congratulations!";
            }else{
                echo "Sorry";
            }
        }   
    ?>