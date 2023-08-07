<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST["submit"])){
        print_r($_POST);
        print_r($_FILES);
    }
      
    ?>

    <form action="" enctype="multipart/form-data" method="post"> <br>
        <input type="text" name="name" placeholder="Enter Name"> <br>
        <input type="file" name="profile"> <br>

        <input type="submit" name="submit" value="UPLOAD"> 

    </form>

</body>

</html>