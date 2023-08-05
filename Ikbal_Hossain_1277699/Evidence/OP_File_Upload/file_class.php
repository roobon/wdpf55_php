<?php 
    class FileClass {
        public $image;
        public $size;
        public $tep_location;
        public $upload__location;
        // public function __construct($file){
        //     $this->image = $file;
        //     echo "<pre>";
        //     print_r($this->image);
        // }
    }

        public function doUpload(){
            $path = "Uploads/";
            $name = $this->image["name"];
            $tempName = $this->image["temp_image"];
        }

?>