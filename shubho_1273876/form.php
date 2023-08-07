<?php require_once("fileClass.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <?php if (isset($_POST['submit'])) {
        $photo = $_FILES['file']; // Corrected 'file' instead of 'photo'
        $obj = new FileClass($photo);
        $obj->doUpload();
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id=""> <!-- Corrected name attribute to "file" -->
        <input type="submit" name="submit" value="Submit"> <!-- Added name attribute for the submit button -->
    </form>
</body>

</html>