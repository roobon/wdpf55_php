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
            $path = 'Upload/';
            $error= array();
            
            $nameArray = explode(".", $name);
            // print_r($nameArray);
            $ext = strtolower(end($nameArray));
            $allowed_ext = array("png", "jpg", "jpeg", "bmp");

            if(!in_array($ext, $allowed_ext)){
                $error = "Only png, jpg, jpeg, bmp files are allowed.";
            }
            

            $allowed_size = "524288";            

            if ($size>$allowed_size) {
                $error[] = "Only 512Kb size is allowed.";
            }
            if (empty($error)) {
                if(move_uploaded_file($temp, $path.$name)){
                    echo "$name ($size bytes) is uploaded.";
                }
            } else{
                foreach ($error as $err) {
                    echo "$err". "<br>";
                }
            }
            
        }
    ?>
    <form action="" enctype="multipart/form-data"
    method="post">
        <label for="homework">Class notes:</label>
        <input type="file" name="homework" value=""><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>