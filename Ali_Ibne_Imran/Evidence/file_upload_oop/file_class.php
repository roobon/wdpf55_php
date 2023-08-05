<?php 
    class FileClass{
        public $image;
        public $name;
        public $size;
        public $tmpName;
        function __construct($file){
            $this->image = $file;
            $this->name = $this->image["name"];
            $this->size = $this->image["size"];
            $this->tmpName = $this->image["tmp_name"];
        }
        // function checkData(){
        //     // echo "<pre>";
        //     // print_r($this->image);
        // }
        function doUpload(){
            $path = "uploads/";
            $error = array();
            $limit = 102400; //100KB
            if($this->size > $limit){
                $error[] = "<h1 style='color:red' h1>Maximum size 100 kb</h1>";
            }
            if(empty($error)){
                if( move_uploaded_file($this->tmpName, $path.$this->name)){
                    echo "<h1 style='color:green' h1>Upload Successfull</h1>";
                }
            }else{
                foreach($error as $err){
                    echo $err ."<br>";
                }
            }
           
        }
    }

?>