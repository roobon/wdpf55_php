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
        // function checkData(){
        //     // echo "<pre>";
        //     // print_r($this->image);
        // }
        function doUpload(){
            $path = "uploads/";
            $error = array();
            $limit = 102400; //100kb
            if($this->size > $limit){
                $error[] = "<h1 style='color:red'><Failed! Maximum size 100 kb</h1>";
            }
            
            $allowType = array("jpg","png","jpeg","bmp");

            if(!in_array($this->ext, $allowType)){
                $error[] = "<h1 style='color:red'>Failed! jpg, png, jpeg, bmp files are allow</h1>";
            }

            if(empty($error)){
                if( move_uploaded_file($this->tmpName, $path.$this->name)){
                    echo "<h1 style='color:green'>Upload Successfull</h1>";
                }
            }else{
                foreach($error as $err){
                    echo $err ."<br>";
                }
            }
           
        }
    }

?>