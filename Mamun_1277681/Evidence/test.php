<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="number" id="number">
        <button type="submit">CHECK</button>
    </form>

    <?php
    function CheckOddEven(){
        if(isset($_POST['number'])){
            $number = $_POST['number'];
            if(($number)){
                if ($number % 2 == 0) {
                    echo "$number is Even";
                } else {
                    echo "$number is Odd";
                }
            } else {
                echo "Please enter a valid number.";
            }
        }
    }

    CheckOddEven();
    ?>
</body>
</html>
