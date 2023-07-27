<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul li{
            color: red;
        }
    </style>
</head>
<body>
    <?php 
        if(isset($_POST["submit"])){
            echo "<pre>";
            print_r($_POST);
            print_r($_FILES);
            $name = $_FILES["photo"]["name"];
            $tmp = $_FILES["photo"]["tmp_name"];
            $size = $_FILES["photo"]["size"];
            $sizemb =  $size/1024/1024;
            $sizemb =  round($sizemb,2);

            $allowsize = "100"; 
            $error = array();
            $path = "upload/";


            $nameArray = explode(".", $name);
            $ext = strtolower(end($nameArray));
            $allowType = array("jpg","png","jpeg","bmp");

            if(!in_array($ext, $allowType)){
                $error[] = "jpg, png , jpeg, bmp files are allow & ";
            }

            if($size>$allowsize){
                $error[] = "Size limit 100 kb";
            }

            if(empty($error)){
                if( move_uploaded_file($tmp,$path.$name)){
                     echo "$name ($sizemb MB ) file uploaded";
                 }
            }else{
                echo "<ul>";
                foreach($error as $err){
                    echo "<li>" . $err ."</li>";
                }
                echo "</ul>";
            }
        

        }
    ?>
    <form action="" enctype="multipart/form-data" 
    method="post">
        Name: <input type="text" name="name"><br><br>
        Class notes: <input type="file" name="photo"><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>