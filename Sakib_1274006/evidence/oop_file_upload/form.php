<?php require_once('File_class.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP FILE UPLOAD</title>
</head>
<body>
    <h2>Photo Upload</h2>
    <?php 
    if(isset($_POST['submit'])){
        $photo = $_FILES["photo"];
        $obj = new FileClass($photo);
        $obj->doUpload();
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
       <input type="file" name="photo"> <br> <br>
       <input type="submit" name="submit" value="Upload"> 
    </form>
</body>
</html>