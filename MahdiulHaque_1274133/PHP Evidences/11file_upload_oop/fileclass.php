<?php 
   class FileClass {
       public $image;
       public $name;
       public $size;
       public $tmpName;
       public $ext;

      
      

      
      
       
       public function __construct($file){
            $this->image = $file;
            $this->name = $this->image['name'];
            $this->size = $this->image['size'];
            $this->tmpName = $this->image['tmp_name'];
            $array = explode(".", $this->name);
            $this->ext = end($array);

        
       }

    //    public function checkData(){
    //        echo "<pre>";
    //        print_r($this->image);
    //    }

        public function doUpload(){
         $path = "uploads/";
         $errors = array();
         $limit = 404800; // 200kb;
         if($this->size>$limit){
            $errors[] = "Upload Failed. You can upload within 200KB size";
         }

         $allowedTypes = ["jpg", "png", "jpeg"];
         if(!in_array($this->ext, $allowedTypes)){
            $errors[] = "Upload failed. File must be jpg/jpeg/png";
         }

         if(empty($errors)){
            if(move_uploaded_file($this->tmpName, $path.$this->name)){
                echo "<p>Uploaded successfully</p>";
            }
         } else {
            foreach($errors as $err){
                echo $err . "<br>";
            }
         }
        
        
      }
   }



?>