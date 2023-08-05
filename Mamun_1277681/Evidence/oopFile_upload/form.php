<?php 
require_once('fileClass.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Files Upload</h3>
<?php 
if(isset($_POST['submit'])){

    $photo = $_FILES['photo'];
    $obj =  new FileClass($photo);
    $obj->doUpload();

}
?>
<form action="" method="post" enctype="multipart/form-data"> <br> <br>
         <!-- <input type="text" name="name" id="" placeholder="Enter name"> <br> <br> -->
         <input type="file" name="photo" id=""> <br> <br>
         <input type="submit" name="submit" id="" value="UPLOAD"> <br>
    </form>
</body>
</html>