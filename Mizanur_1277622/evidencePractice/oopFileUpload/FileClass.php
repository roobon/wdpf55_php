<?php 
class  FileClass{
    public $image;
    public $name;
    public $size;
    public $tmpName;
    public $ext;
    public function __construct($file){
        $this->image = $file;
        //echo "<pre>";
        //print_r($this->image = $file);
        $this->name = $this->image["name"];
        $this->size = $this->image["size"];
        $this->tmpName = $this->image["tmp_name"];
        $extArray = explode("." , $this->name);
        $this->ext = strtolower(end($extArray));
    }

    public function doUpload(){
        $path = "uploadsFile/";
        $error = array();
        $limit = 102400;
        if($this->size>$limit){
            $error[] = "Max upload size is 100kb";
        }
        $allowedtype = ["jpg", "jpeg", "png"];
        if(!in_array($this->ext, $allowedtype)){
            $error[] = "Upload failed. You should upload jpg/jpeg/png files only";
        }
        if(empty($error)){
            if(move_uploaded_file($this->tmpName, $path.$this->name)){
                echo "File uploaded successfully";
            }
        }
        else{
            foreach($error as $err){
                echo $err . "<br>";
            }
        }
    }
}
?>