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
            echo "<pre>";
            print_r($_POST);
            print_r($_FILES);
            $name = $_FILES["file"]["name"];
            $tmp = $_FILES["file"]["tmp_name"];
            $size = $_FILES["file"]["size"];
            $sizemb =  $size/1024/1024;
            $sizemb =  round($sizemb,2);
            $path = "upload/";
        //    if( move_uploaded_file($tmp,$path.$name)){
        //         echo "$name ($sizemb MB ) file uploaded";
        //    }

        if (is_uploaded_file($_FILES['file']['tmp_name'])) { // another
            copy($tmp,$path.$name);
            } else {
            echo "<p>Potential script abuse attempt detected.</p>";
            }

        }
    ?>
    <form action="" enctype="multipart/form-data" 
    method="post">
        Name: <input type="text" name="name"><br><br>
        Class notes: <input type="file" name="file"><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>