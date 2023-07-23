<?php
class verify{
    private $pin;
    function __construct($ein){
        if ($this->verifyEIN($ein)) {
            echo "EIN verified. Finish";
        }
    }
    protected function verifyEIN($ein){
        if ($this->pin == $ein) {
            return true;
        }
    }
}
$employee = new verify("100");