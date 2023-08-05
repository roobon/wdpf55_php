<?php
    class FileClass{
        public $image;
        public $size;

        public function __construct($file){
            $this->image = $file;
        }

        // function checkdata(){
        //     echo "<pre>";
        //     print_r($this->image);
        // }

        public function do_Upload(){
            $path = "upload/";
            
            $name = $this->image['name'];

            $temp_name = $this->image['tmp_name'];

            move_uploaded_file($temp_name, $path.$name);
        }
    }
?>