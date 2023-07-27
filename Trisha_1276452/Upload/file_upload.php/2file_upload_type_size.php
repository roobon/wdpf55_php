<?php 
if (isset($_POST['submit'])){
    // echo"<pre>";
    // print_r($_POST);
    // print_r($_FILES);
    $name =$_FILES['photo']['name'];
    $temp =$_FILES['photo']['tmp_name'];
    $size =$_FILES['photo']['size'];
    $sizemb =$size/1024/1024;
    $sizemb =round($sizemb,2);
    $allowed_size ="524288" ;//bytes
    $path = 'upload/';
    $error =array();

    $nameArry = explode(",",$name);
    $ext = strtolower(end($nameArry));
    $allowed_types = array("jpg","png","bmp","jpeg");

    if (!in_array($ext,$allowed_types)){ //not in array
        $error[]="jpg,png,bmp,jpeg files are allowed";
    }
    // print_r($nameArry);
    // echo "<hr>";
    // echo end($nameArry);
    // echo "<hr>";

    if($size>$allowed_size){
        $error[]= "Only 512 kb size is allowed";
    }
    if (empty($error)){
        if(move_uploaded_file($temp, $path.$name)){
            echo "$name($size bytes) file uploaded";
        }

    }else{
        foreach($error as $err){
            echo $err."<br>";
        }
    }
}

// //This is another way

// if(is_uploaded_file($temp)){
//     copy($temp,$path,$name);
//     echo "Uploaded";
// }else{
//     echo "<p>potential script abuse attempt detected.</p>";
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" enctype="multipart/form-data"
method="post">
<input type="file" name ="photo"><br><br>
<input type="submit" name ="submit" value = "upload"><br><br>

</form>
</body>
</html>

