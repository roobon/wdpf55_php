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
            
            $name = $_FILES['profile']['name'];
            $temp = $_FILES['profile']['tmp_name'];
            $size = $_FILES['profile']['size'];
            $allowed_size = "524288"; //bytes
            $path = 'upload/';
            $error = array();

            $nameArray = explode(".", $name);
            //print_r($nameArray);
            $ext = strtolower(end($nameArray));
            $allowed_types = array("jpg", "png", "bmp", "jpeg");

            if(!in_array($ext, $allowed_types)){
                $error[] = "jpg, png, bmp, jpeg files are allowed";
            }

            if($size>$allowed_size){
                $error[] = "Only 512 kb size is allowed";
            }

            if(empty($error)){
                if(move_uploaded_file($temp, $path.$name)){
                    echo "$name ($size bytes) file uploaded";
                }
            } else {
                echo "<ul>";
                foreach($error as $err){
                    echo "<li>$err</li>";
                }
                echo "</ul>";
            }



            
            
        }
    
    
    ?>

<form action="" enctype="multipart/form-data"
method="post">
<label form="name">Name:</label><br>
<input type="text" name="name" value=""><br>
<label form="email">Email:</label><br>
<input type="text" name="email" value=""><br>
<label form="homework">Class notes:</label>
<input type="file" name="profile" value=""><br>
<input type="submit" name="submit" value="UPLOAD">
</form>
</body>
</html>