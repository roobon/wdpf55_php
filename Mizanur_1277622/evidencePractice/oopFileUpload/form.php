<?php include_once("FileClass.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST["submit"])){
        $uploads = $_FILES["file"];
        $obj = new FileClass($uploads);
        $obj->doUpload();
        // echo "<pre>";
        // print_r($obj);
    }
    ?>
    <div class="container">
    <h2>Upload Your File</h2>
    <form action="" method="post" class="form-control" enctype="multipart/form-data">
        <input type="file" class="form-control" name="file"><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>
    </div>
</body>
</html>