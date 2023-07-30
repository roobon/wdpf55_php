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
            // print_r($_FILES);
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
                echo "<p>Potential script abuse attempt detected.</p>";
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