<?php require_once('fileclass.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo"><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
    
    <?php 
      if(isset($_POST['submit'])){
         $photo = $_FILES['photo'];
         $obj = new FileClass($photo);
        //  echo "<pre>";
        //  print_r($obj);
        $obj->doUpload();

      }
    
    ?>
   
</body>
</html>