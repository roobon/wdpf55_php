<?php
class FileClass
{
    public $image;
    public $name;
    public $size;
    public $tmpName;

    public function __construct($file)
    {
        $this->image = $file;
        $this->name = $this->image['name'];
        $this->size = $this->image['size'];
        $this->tmpName = $this->image['tmp_name'];

        // echo "<pre>" ;
        // print_r($this->image) ;
    }


    function doUpload()
    {
        $path = "upload/";
        $errors = [];
        $limits = 102400; // 100 kb 
        if ($this->size > $limits) {
            $errors[] = "File size Limited within 100KB";
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
