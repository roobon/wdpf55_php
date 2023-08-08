


<?php 
class FileClass{
    public $image;
    public $size;
    public $tmpName;
    public $name;
    function __construct($file)
    {
      $this->image = $file;  
        $this->name =$this->image['name'];
        $this->size =$this->image['size'];
        $this->tmpName =$this->image['tmp_name'];
    }
    // public function checkData(){
    //     echo "<pre>";
    //     print_r($this->image)
    // }
    public function doUpload(){
        $path = "uploads/";
        $errors = array();
        $limit = 204800 ; //.200kb

        if($this->size >$limit){
         echo $errors[]= "you can upload within 200kb";
        }
        if(empty($errors)){
           if( move_uploaded_file($this->tmpName, $path.$this->name)){
            echo "Uploaded successfully";
           }
           else{
            foreach($errors as $err){
                echo $err ."<br>";
            }
           }
           
        }
      
      
    }
}
?>