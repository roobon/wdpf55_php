<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
//first block start ITS MOVE//
if(isset($_POST['submit'])){
    echo "<pre>";
    print_r($_POST);
    //print_r($_FILES);
    $name = $_FILES["file"]["name"];
    $temp = $_FILES["file"]["tmp_name"];
    $size = $_FILES["file"]["size"];
    $sizemb = $size/1024/1024;
    $sizemb = round($sizemb, 2);
    $path = 'upload/';
    move_uploaded_file($temp, $path.$name);
    echo "$name is uploaded and size is $sizemb Mb";
    //first block end//

    //second block start ITS COPY//
    if(is_uploaded_file($_FILES["file"]["tmp_name"])){
        copy($_FILES["file"]["tmp_name"], "upload/".$name);
    }else{
        echo "Poterntial script";
    }
    //second block end//
}
?>
<form action="" enctype="multipart/form-data" method="post">
    <label for="name">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="email">Email:</label><br>
    <input type="text" name="email"><br>
    <input type="file" name="file"><br>
    <input type="submit" name="submit" value="Upload">
</form>


</body>
</html>