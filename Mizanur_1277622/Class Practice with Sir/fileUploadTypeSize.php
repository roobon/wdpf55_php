<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        echo "<pre>";
        print_r($_POST);
        print_r($_FILES);
        $name = $_FILES["file"]["name"];
        $temp = $_FILES["file"]["tmp_name"];
        $size = $_FILES["file"]["size"];
        $allowed_size = "50"; //bytes
        $path = 'upload/';
        $error = array();

        if ($size > $allowed_size) {
            $error[] = "Only 512kb size is allowed";
        }

        if (empty($error)) {
            if (move_uploaded_file($temp, $path . $name)) {
                echo "$name is uploaded and size is $size";
            } else {
                foreach ($error as $err) {
                    echo $err . "<br>";
                }
            }
        }
    }
    ?>
    <form action="" enctype="multipart/form-data" method="post">
        <label for="name">Name:</label><br>
        <input type="text" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email"><br>
        <input type="file" name="file"><br>
        <input type="submit" name="submit" value="Upload">
    </form>


</body>

</html>