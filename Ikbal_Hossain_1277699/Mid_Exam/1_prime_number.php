<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_REQUEST['submit'])) {
            $myNum = $_POST['myNum'];

            function PrimeCheck($number){
                if ($number == 0) {
                    return "0 is not acceptable";
                } elseif($number == 1) {
                    return "1 is not a prime number";
                }elseif ($number==2) {
                    return "2 is a prime number";
                } else {
                    for ($i=2; $i < $number; $i++) { 
                        if ($number % $i == 0) {
                            return "{$number} is not a prime number";
                        }
                    }
                    return "{$number} is a prime number.";
                }
            }

            
            echo PrimeCheck($myNum);
        }
    ?>

    <form action="" method="post">
        <input type="number" name="myNum" placeholder="Enter a number"> <br>
        <input type="submit" name="submit" value="Prime Check">
    </form>
</body>
</html>