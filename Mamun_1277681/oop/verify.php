<?php 
class Verify{
private $pin =100;
function __construct($ein){
if($this->verifyEIN($ein)){
    echo "EIN verified, FInished!";
}
}
protected function verifyEIN($ein){
   if($this->pin ==$ein){
    return true;
   }
}
}
$Employee = new Verify("100")
?>
