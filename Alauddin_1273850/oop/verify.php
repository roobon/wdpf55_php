<?php 
    class Verify {
        private $pin = 100;
        public function __construct($e){
            if ($this->verifyEIN($e)){
                echo "PIN varified. Finish";
            } else {
                echo "PIN didn't matched !!";
            }
        }
        protected function verifyEIN($e){
            if ($this->pin == $e){
                return TRUE ;
            }
        }
    }

    $employee = new Verify("150");



?>