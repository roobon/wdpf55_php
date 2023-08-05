<?php
    require_once("class_file.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
        if(isset($_REQUEST['submit'])){
            $photo = $_FILES['photo'];
            $obj = new Fileclass($photo);

            $obj->do_Upload();
        }
    ?>
    <form action="" enctype="multipart/form-data" method="post">
        <input type="file" name="photo"> <br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>