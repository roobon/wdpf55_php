<?php 

if(isset($_REQUEST['submit'])){
 $text =    $_REQUEST['text'];
 if($text == 'A'){
    echo "$text is an Excellent result";
 }
 else if($text == 'B'){
    echo "$text is a good result";
 }
 else if($text == 'C'){
    echo "$text is a FAir result";
 }
 else if($text == 'D'){
    echo "$text is a poor result";
 }
 else{
    echo " $text is not allowed";
 }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="text" id="">
        <input type="submit" name="submit" id="" value="CHECK">
    </form>
</body>
</html>