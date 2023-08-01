<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <form action="" method="post">
                <input type="text" name="alphabet" placeholder="Enter your alphabet">
                <input type="submit" name="submit" value="CHECKED">

        </form>
        <?php
                if (isset($_POST["submit"])) {
                        $alphabet = $_POST["alphabet"];
                        $vowels = array("a", "e", "i", "o", "u");
                       $lowerLetter = strtolower($alphabet);

                        if (in_array($lowerLetter, $vowels)) {
                                echo "$alphabet is a Vowel";
                        } else {
                                echo "$alphabet is a Consonant";
                        }
                }


        ?>

</html>