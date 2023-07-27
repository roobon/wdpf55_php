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
        // echo "<pre>";
        // print_r($_POST);
      $name=   $_FILES['profile']['name'];
      $tmp=  $_FILES['profile']['tmp_name'];
      $size=  $_FILES['profile']['size'];
      $sizemb = $size/1024/1024;
      $allowedSize =" 524288" ; //bytes
        $path = 'upload/';
        $error = array();
        $nameArray = explode(".", $name);
        // print_r($nameArray);
        $ext =  strtolower(end($nameArray)) ;
        $allowedTypes = array("jpg", "png", "bmp", "jpeg");
        if(!in_array($ext, $allowedTypes)){
            $error[]= "jpg, png, bmp, jpeg files are allowed3"
        }

        if($size >$allowedSize){
            $error[]= "Bellow 512kb size is allowed";
        }
        if(empty($error)){
             if(move_uploaded_file($tmp, $path.$name)){
            echo "$name ($sizemb megabytes) Files Uploaded";
        }
        }
        else{
        foreach($error as $err)
        echo $err."<br>";
        }
        // if(move_uploaded_file($tmp, $path.$name)){
        //     echo "$name ($sizemb megabytes) Files Uploaded";
        // };
    }


    ?>
    <form action="" method="post" enctype="multipart/form-data" > <br>
        <input type="text" name="name" id="" placeholder="Enter name"> <br>
    <input type="file" name="profile" id=""> <br>
    <input type="submit" name="submit" id="" value="UPLOAD"> <br>
    </form>
</body>
</html>