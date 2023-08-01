<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Find out Even or Odd number</h2>
    <form method="post" action="">
        <input class="form-control" type="text" name="text">
        <input class="form-control" type="submit" name="submit" value="Submit">
    </form>

    <?php 
        if(isset($_POST["submit"])){
            $mynum = $_POST["text"];

            // $vowel = ['a','e','i','o','u'];
            // if (in_array(strtolower($mynum), $vowel)) {
            //     echo "$mynum is a Vowel";
            // }else{
            //     echo "$mynum is a Consonant";
            // }

            function checkNumber($txt){
                $vowel = ['a','e','i','o','u'];
                if(in_array(strtolower($txt), $vowel)){
                    echo "$txt is a Vowel";
                }else{
                    echo "$txt is a Consonant";
                }
            }
           checkNumber($mynum);
        }
    ?>
</body>
</html>