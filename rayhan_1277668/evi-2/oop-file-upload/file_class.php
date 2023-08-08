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
        $path = "upload/";
        $errors = [];
        $limits = 40800; // 400 kb 
        if ($this->size > $limits) {
            $errors[] = "Upload Failed. File size Limited within 100KB";
        }

        $allowedTypes = ["jpg", "png", "jpeg"];
        if(!in_array($this->ext, $allowedTypes)){
            $errors[] = " Upload failed. File must be jpg/jpeg/png ";
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
