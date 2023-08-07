<?php 
class FileClass{
    public $image;
    public $name;
    public $size;
    public $tmpName;
    public function __construct($file)
    {
        $this->image=$file;
        $this->name=$this->image['name'];
        $this->size=$this->image['size'];
        $this->tmpName=$this->image['tmp_name'];
    }
    public function doUpload(){
        $path = "uploads/";
        $errors = array();
        $limit =102400; // 100kb
        if($this->size>$limit){
         $errors[] ="you can upload with in 100kb";
        }
        if(empty($errors)){
            if(move_uploaded_file($this->tmpName,$path.$this->name)){
                echo "<p>file uploaded successful</p>";
            }
        }
        else{
            foreach($errors as $err){
                echo $err."<br>";
            }
        }
    }
}

?>