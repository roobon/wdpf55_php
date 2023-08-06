<?php 
class Fileclass{
    public $image;
    public $name;
    public $size;
    public $tmpName;
    // public $tem_location;
    // public $upload_location;


    public function __construct($file) {
        $this->image = $file;
            $this->name = $this->image['name'];
            $this->size = $this->image['size'];
            $this->tmpName = $this->image['tmp_name'];
       
    //    $this->image = $_FILES[$file]['size'];
    }
    public function doUpload(){
        $path = "uploads/";
        $errors = array();
        $limit = 102400;//100kb
        if($this->size>$limit){
            $errors[]= "You can upload within 100KB size";
        }
        if(empty($errors)){
            if(move_uploaded_file($this->tmpName,$path.$this->name)){
                echo "<p>Uploaded successfully</p>";
            }
        }else{
            foreach($errors as $err){
                echo $err ."<br>";
            }
        }
        
        //move_uploaded_file($tempName,$path.$name);
    }
}

?>