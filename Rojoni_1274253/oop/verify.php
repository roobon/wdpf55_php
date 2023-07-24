<?php 
class Verify{
    private $pin = 100;//privet property

   public function __construct($e){//this $e is Parameter//by default public function
        if($this->verifyEIN($e)){
            echo "PIN verified. Finish";

        }
    }
        protected function verifyEIN($e){
            if($this->pin == $e){
                return TRUE;

            }
        }

    }

$employee = new Verify("100");
?>