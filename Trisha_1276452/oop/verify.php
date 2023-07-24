<?php 
class Verify{
    private $pin =100;
    function __construct($ein){
        if ($this->verifyEIN($ein)){
            echo "EIN verified.Finish";
         }
    }
    protected function verifyEIN($ein){
        //return TRUE
        if($this->pin == $ein){
            return TRUE;
        }
    }
}

$employee = new Verify("100");
?>