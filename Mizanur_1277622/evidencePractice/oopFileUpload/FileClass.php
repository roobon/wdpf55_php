<?php 
class  FileClass{
    public $image;
    public $name;
    public $size;
    public $tmpName;
    public function __construct($file){
        $this->image = $file;
        $this->name = $this->image["name"];
        $this->size = $this->image["size"];
        $this->tmpName = $this->image["tmp_name"];
        //echo "<pre>";
        //print_r($this->image = $file);
    }

    public function doUpload(){
        $path = "uploadsFile/";
        $error = array();
        $limit = 102400;
        if($this->size>$limit){
            $error[] = "Max upload size is 100kb";
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