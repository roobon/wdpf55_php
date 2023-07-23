<?php
class Verify {
    private $pin = 100;

    public function __construct($e){
    if ($this->verifyEIN($e)) {
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