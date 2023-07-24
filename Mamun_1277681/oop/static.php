<?php 

class visitor{
    private static $visitorNumber= 0;
   public function __construct() {
       self::$visitorNumber++; //scope resolution
    }

    static function getVisitor(){
       echo self::$visitorNumber;
    }
}
new visitor;
new visitor;
new visitor;
new visitor;
// $visitorNew = new visitor;
// echo $visitorNew->getVisitor();
visitor ::getVisitor()
;?>