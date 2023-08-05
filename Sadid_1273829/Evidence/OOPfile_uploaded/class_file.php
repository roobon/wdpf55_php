<?php
    class FileClass{
        public $image;
        public $name;
        public $size;
        public $tmpname;

        public function __construct($file){
            $this->image = $file;
            $this->name = $this->image['name'];
            $this->size = $this->image['size'];
            $this->tmpname = $this->image['tmp_name'];
        }

        public function do_Upload(){
            $path = "upload/";
            $error = array();
            $limit = 105400; // 100kb

            if($this->size > $limit){
                $error[] = "You can upload within 100kb size.";
            }

            if (empty($error)) {
                move_uploaded_file($this->tmpname, $path.$this->name);
                echo "<h1>File Uploaded Suuccessfully.</h1>";
            }
            else {
                foreach ($error as $err) {
                    echo $err . "<br>";
                }
            }
        }
    }
?>