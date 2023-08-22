<?php  require('file_class.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h3> Upload file </h3>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file"> <br>
    <input type="submit" name="submit" value="Upload">

</form>

<?php 
if ( isset($_POST['submit']) ) {
    $myFile = $_FILES['file'] ;
    $obj = new FileClass($myFile) ;
    

}

?>
</body>
</html>