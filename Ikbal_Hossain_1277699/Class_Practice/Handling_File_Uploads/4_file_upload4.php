<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST["submit"])) {
        // echo "<pre>";
        // print_r($_POST);
        // print_r($_FILES);
        $name = $_FILES["photo"]["name"];
        $temp = $_FILES["photo"]["tmp_name"];
        $size = $_FILES["photo"]["size"];
        $allowedSize = "524288"; // bytes
        $path = "upload/";
        $error = array();

        if ($size > $allowedSize) {
            $error[] = "Only 512 kb size is allowed";
        }

        if (empty($error)) {
            if(move_uploaded_file($temp, $path.$name)){
                echo "$name ($size byte) file uploaded";
            }
        } else {
            foreach($error as $err){
                echo $err . "<br>";
            }

        }

    }

    ?>
    

    <form action="" enctype="multipart/form-data" method="post"> <br>
        <input type="text" name="name" placeholder="Enter Name"> <br>
        <input type="file" name="photo"> <br>

        <input type="submit" name="submit" value="UPLOAD">

    </form>

</body>

</html>