<?php 
class FileClass{
    public $image;
    public $size;
    public $temp_location;
    public $upload_loaction;
    public function __construct($file){
        $this-> image = $file;
    }

    public function doUpload(){
       $path = "upload/";
       $name = $this-> image['name'];
       $tempName = $this-> image ['tmp_name'];
       move_uploaded_file($tempName, $path.$name);
    }

}
