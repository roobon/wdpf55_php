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
            //echo "<pre>";
            //print_r($_POST);
            //print_r($_FILES);
            $name = $_FILES['profile']['name'];
            $temp = $_FILES['profile']['tmp_name'];
            $size = $_FILES['profile']['size'];
            $sizemb = $size/1024/1024;
            $sizemb = round($sizemb, 2);
            $path = 'upload/';
            // if(move_uploaded_file($temp, $path.$name)){
            //     echo "$name ($sizemb MB) file uploaded";
            // }
            if (is_uploaded_file($temp)) {
                copy($temp, $path.$name);
                echo "Uploaded";
            } else {
            echo "<p>Select a file  .</p>";
            }

        }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter Name"> <br>   
        <input type="file" name="profile"><br>
        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>