<?php
    class FileClass{
        public $image;
        public $name;
        public $size;
        public $tmpname;
        public $ext;

        public function __construct($file){
            $this->image = $file;
            $this->name = $this->image['name'];
            $this->size = $this->image['size'];
            $this->tmpname = $this->image['tmp_name'];
            $array = explode(".", $this->name);
            $this->ext = end($array);
        }

        public function do_Upload(){
            $path = "upload/";
            $error = array();
            $limit = 204800; // 200kb
            $allowedTypes = ["jpg", "png", "jpeg"];

            if($this->size > $limit){
                $error[] = "You can upload within 100kb size.";
            }

            if (!in_array($this->ext, $allowedTypes)) {
                $error[] = "Upload failed. File must be jpg/jpeg/png";
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