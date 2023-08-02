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
    $grade = $letter;
    if($grade == "A"){
        echo "Excellent";
    } else if ($grade == "B") {
        echo "Good";
    } else if ($grade == "C") {
        echo "Fair";
    } else if ($grade == "D") {
        echo "Poor";
    } else if ($grade == "F") {
        echo "Fail";
    }
} 
?>    
    <form action="" method="post">
        <input type="text" name="letter">
        <input type="submit" name="submit" value="SUBMIT">
    </form>

</body>
</html>