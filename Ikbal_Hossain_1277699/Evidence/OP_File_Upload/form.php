<?php require_once("file_class.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        if(isset($_POST["submit"])){
            $photo = $_FILES["photo"];
            $obj = new FileClass($photo);
            // echo "<pre>";
            // print_r($obj);
            $obj->doUpload();
        }
    
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" > <br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>