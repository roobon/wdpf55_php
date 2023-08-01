<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $myvowel = ["a", "e", "i",  "o", "u"];
    if(isset($_POST['submit'])){
        $vowel = $_POST['letter'];
        $lowervowel = strtolower($vowel);
        if(in_array($lowervowel, $myvowel)){
            echo " $vowel is a Vowel";
        } else {
            echo "$vowel is a Consonent";
        }
    }
    
    
    ?>


    <form action="" method="post">
        <input type="text" name="letter">
        <input type="submit" name="submit" value="CHECk">
    </form>
</body>
</html>