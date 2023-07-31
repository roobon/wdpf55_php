<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="text"><br>
        <input type="submit" name="submit" value="Check">
    </form>
    <h4> 
        <?php 
        if(isset($_POST["submit"])){
            $letter = $_POST["text"];
            $lowerLetter = strtolower($letter);

            $vowel = array("a", "e", "i","o","u");
            //$vowel = array("a", "e", "i","o","u", "A","E","I","O","U");
            
            if(in_array($lowerLetter, $vowel)){
                echo "$letter It's Vowel";
            }else{
                echo "$letter It's Consonant";
            }
        }
        ?>
    </h4>
</body>
</html>