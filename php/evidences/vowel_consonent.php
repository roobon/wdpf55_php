<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Find out Vowel/Consonent</h2>
    <?php 
    if(isset($_POST['letter'])){
        $letter =  $_POST['letter'];
        $lowerletter = strtolower($letter);

        $vowels = ['a', 'e', 'i', 'o', 'u'];

        if(in_array($lowerletter, $vowels)){
            echo "$letter is a Vowel";
        } else {
            echo "$letter is a Consonent";
        }
       
    }    
    ?>
    <form action="" method="post">
        <input type="text" name="letter">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>