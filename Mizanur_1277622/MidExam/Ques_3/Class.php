<?php 
class  FileClass{
    public $image;
    public $name;
    public $size;
    public $tmpName;
    public $ext;
    public function __construct($file){
        $this->image = $file;
        echo "<pre>";
        print_r($this->image = $file);
        $this->name = $this->image["name"];
        $this->size = $this->image["size"];
        $this->tmpName = $this->image["tmp_name"];
        $extArray = explode("." , $this->name);
        $this->ext = strtolower(end($extArray));
    }

    public function doUpload(){
        $path = "uploadsFile/";
        $error = array();
        $limit = 409600;
        if($this->size>$limit){
            $error[] = "Max upload size is 400kb";
        }
        $allowedtype = ["jpg", "jpeg", "png", "pdf", "docx", "xlsx"];
        if(!in_array($this->ext, $allowedtype)){
            $error[] = "Upload failed. You should upload jpg/jpeg/png/pdf/docx/xlsx files only";
        }
        else{
            foreach($error as $err){
                echo $err . "<br>";
            }
        }
    }
}
?>