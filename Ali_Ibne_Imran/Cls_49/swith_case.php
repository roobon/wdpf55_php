<form action="" method="post">
        <input type="text" name="guess" placeholder="Guess number">
        <input type="submit" value="Check">
</form>
    <?php
        if(isset($_POST['guess'])){
            $guess = $_POST['guess'];
            switch($guess){
                case $guess>=8:
                    echo "Excellent";
                    break;
                case $guess>=5:
                    echo "Good";
                    break;
                default:
                    echo "Poor";
            }
        }   
    ?>