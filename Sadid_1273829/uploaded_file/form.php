<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php 
    echo "<pre>";
        if (isset($_REQUEST["submit"])) {
            // print_r($_POST);
            // print_r($_FILES);

            $name = $_FILES['homework']['name'];
            $temp = $_FILES['homework']['tmp_name'];
            $size = $_FILES['homework']['size'];
            $sizeMB = $size/1024/1024;
            $sizeMB = round($sizeMB, 2);
            $path = 'Upload/';

            if(move_uploaded_file($temp, $path.$name)){
                echo "$name ($sizeMB mb) is uploaded."; // masum 120Kb is uploaded.
            };

            #another way for uploading file
            // if (is_uploaded_file($temp)) {
            //     copy($temp, $path.$name);
            //     echo "Uploaded";
            // }else{
            //     echo "<p>Potential script abuse attempt detected</p>";
            // }
        }
    ?>
    <form action="" enctype="multipart/form-data"
    method="post">
        <!-- <label for="name">Name:</label>
        <input type="text" name="name" value=""><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value=""><br> -->
        <label for="homework">Class notes:</label>
        <input type="file" name="homework" value=""><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>