<?php 
    class FileClass{
        public $image;
        public $name;
        public $size;
        public $tmpName;
        public $ext;
        function __construct($file){
            $this->image = $file;
            $this->name = $this->image["name"];
            $this->size = $this->image["size"];
            $this->tmpName = $this->image["tmp_name"];
            $array = explode(".", $this->name);
            $this->ext = strtolower(end($array));
        }
        function doUpload(){
            $path = "uploads/";
            $error = array();
            $limit = 409600; //400 KB
            if($this->size > $limit){
                $error[] = "<h2><Failed! Maximum size 400 KB</h2>";
            }
            
            $allowType = array("PDF","IMAGE","Document");

            if(!in_array($this->ext, $allowType)){
                $error[] = "<h2>Failed! PDF, IMAGE, Document files are allow</h2>";
            }

            if(empty($error)){
                if( move_uploaded_file($this->tmpName, $path.$this->name)){
                    echo "<h2>Upload Successfull</h2>";
                }
            }else{
                foreach($error as $err){
                    echo $err ."<br>";
                }
            }
           
        }
    }

?>