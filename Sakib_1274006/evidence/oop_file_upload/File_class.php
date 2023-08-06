<?php 

class FileClass {
    public $image;
    public $size;
    public $temp_location;
    public $upload_location;
    public function __construct($file){
        $this ->image = $file;
        // echo "<pre>";
        // print_r($this->image);
        
        // //$this->size = $_FILES[$file]['size']
    }   public function doUpload(){
        $path = "upload/";
        $name = $this->image['name'];
        $tempName = $this->image['tmp_name'];
        move_uploaded_file($tempName, $path.$name);
    }

}

?>