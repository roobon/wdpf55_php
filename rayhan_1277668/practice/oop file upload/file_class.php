<?php 
class FileClass {
    public $image ;
    public $name ;
    public $size ;
    public $tmpName;
    public $ext ;
    public function __construct($file)
    {
        $this->image = $file ;
        echo "<pre>" ;
        print_r($this->image) ;
        // $this->name = $this->image['name'];
        // $this->size = $this->image['size'];
        // $this->tmpName = $this->image['tmp_name'];

        
    }
}


?>