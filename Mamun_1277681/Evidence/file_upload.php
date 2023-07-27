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
      
      $sizemb =round($sizemb, 2);
        $path = 'upload/';
        if(move_uploaded_file($tmp, $path.$name)){
            echo "$name ($sizemb megabytes) Files Uploaded";
        };

    }
    if (is_uploaded_file($tmp) ){
        copy($temp, $path.$name);
        echo "uploaded"  ;
        } else {
        echo "<p>Potential script abuse attempt detected.</p>";
        }
    ?>
    <form action="" method="post" enctype="multipart/form-data" > <br>
        <input type="text" name="name" id="" placeholder="Enter name"> <br>
    <input type="file" name="profile" id=""> <br>
    <input type="submit" name="submit" id="" value="UPLOAD"> <br>
    </form>
</body>
</html>