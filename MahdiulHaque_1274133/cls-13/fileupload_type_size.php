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
        // echo "<pre>";
        // print_r($_POST);
        // print_r($_FILES); //superglobal er kase file er data asche
        $name = $_FILES['photo']['name'];
        $temp = $_FILES['photo']['tmp_name'];
        $size = $_FILES['photo']['size'];
       
        $allowed_size = "10"; // bytes
        $path = 'uploads/';
        $error = array();

        $nameArray = explode(".", $name);
        // print_r($nameArray);
        
        $ext =  strtolower(end($nameArray));
        $allowed_types = array("jpg", "png", "bmp", "jpeg");

        if(!in_array($ext, $allowed_types)){
            $error[] = "jpg, png, bmp, jpeg files are allowed";
        }

        if($size>$allowed_size){
            $error[] = "Only 512 kb size is allowed";
        }

         if(empty($error)){
            if(move_uploaded_file($temp,$path.$name)){
                echo "$name ($size bytes) file uploaded";
            }
         }  else {
            echo "<ul>";
            foreach($error as $err){
                echo "<li>" . $err . "</li>";
            }
            echo "</ul>";
         }
        
     }
   
   
   
   
   ?>
  <form action="" enctype="multipart/form-data" method="post">
   <input type="file" name="photo"><br><br>
   <input type="submit" name="submit" value="Upload">
   </form>
</body>
</html>