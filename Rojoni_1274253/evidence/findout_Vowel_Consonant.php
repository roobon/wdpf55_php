<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        $letter = $_POST['letter'];
        $lowerletter = strtolower($letter);


        $vowels = ['a','e','i','o','u'];

        if(in_array($lowerletter,$vowels)){
            echo "$letter is a VOWEL";
        }else{
            echo "$letter is Consonant";

        }
    }
    ?>
    <form action="" method="post">
        <input type="text" name="letter">
        <input type="submit" name="submit" value="CHECK">
    </form>

    
</body>
</html>