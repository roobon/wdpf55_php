<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>


<?php
class FileClass
{
    public $image;
    public $name;
    public $size;
    public $tmpName;
    public $ext ;
    public function __construct($file)
    {
        $this->image = $file;
        $this->name = $this->image['name'];
        $this->size = $this->image['size'];
        $this->tmpName = $this->image['tmp_name'];
        $array = explode(".", $this->name) ;
        $this->ext = end($array) ;
        // echo "<pre>" ;
        // print_r($this->image) ;
    }


    function doUpload()
    {
        $path = "upload";
        $errors = [];
        $limits = 40800; // 400 kb 
        if ($this->size > $limits) {
            $errors[] = "Upload Failed. File size Limited within 400 KB";
        }

        $allowedTypes = ["jpg", "png", "jpeg"];
        if(!in_array($this->ext, $allowedTypes)){
            $errors[] = " Upload failed. File must be PDF/ IMAGE / Document ";
        }

        if (empty($errors)) {
            if (move_uploaded_file($this->tmpName, $path.$this->name)) {
                echo " Uploaded Successfully ";
            }
        } else {
            foreach ($errors as $err) {
                echo $err . "<br>";
            }
        }
    }
}


    if ( isset( $_POST['submit'] ) ) {
       $photo = $_FILES['photo'] ;
       $obj = new FileClass($photo);
        $obj->doUpload() ;
    }
    
    
    ?>



<h3>Upload File</h3>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="photo"> <br>
<input type="submit" name="submit" value="Upload" >
</form>



</body>
</html>



