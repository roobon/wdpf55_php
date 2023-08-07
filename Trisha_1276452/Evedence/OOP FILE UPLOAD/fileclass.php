<?php
    class FileClass {
        public $image ;
        public $size;
        public $temp_location;
        public $upload_location;
        public $name;
        public $tmpName;
        public function __construct($file) {
            $this->image = $file;
            $this->name = $this->image['name'];
            $this->size = $this->image['size'];
            $this->tmpName = $this->image['tmp_name'];
        
            // echo "<pre>";
            // print_r($this->image);
            // $this->size =$_FILES['$file']['size'];
        }

        public function doUpload(){
            $path = "uploads/";
            $errors = array();
            $limit = 202400; //200kb;

            if(empty($errors)){
                if(move_uploaded_file($this->tmpName, $path.$this->name)){
                    echo "<p>Uploaded Succesfully</p>";
                }
            } else {
                foreach($errors as $err){
                    echo $err ."<br>";
                }
            }






            // $name = $this->image['name'];
            // $tempName = $this->image['tmp_name'];
            // move_uploaded_file($tempName, $path.$name);
        }
    }
    
    ?>