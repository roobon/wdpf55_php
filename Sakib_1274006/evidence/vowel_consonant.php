<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Find out Vowel/Conconent Letter</h2>
    <form method="post" action="">
        <input type="text" name="text" placeholder="Input a Letter">
        <input type="submit" name="submit" value="CHECK">
        
    </form>

    <?php
    if(isset($_POST["text"])){

        $myletter = $_POST['text'];

   $vowel = ["A", "E", "I", "O", "U"];
   
   if (in_array( $myletter, $vowel)){
    echo "$myletter is vowel";

   }else{
    echo "$myletter is consonent";
   }

   }
   

    

   
    
    ?>
</body>
</html>