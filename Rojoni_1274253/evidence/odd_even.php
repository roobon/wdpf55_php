<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Find out odd/Even Number</h2>
    <?php 
    if(isset($_POST['submit'])){
     $mynumber = $_POST['number'];
    
 if($mynumber % 2 == 0){
    echo "EVEN";
}else{
    echo "ODD";

 }
}
?>

<form action="" method="post">
    <input type="number" name="number">
    <input type="submit" name="submit" value="CHECK">
</form>

</body>
</html>