<?php 
class visitor {
     private static $visitorNumber = 0;

     function __construct(){
        self::$visitorNumber++;
     }
     static function getVisitor(){
      echo self::$visitorNumber;
     }

}
new visitor;
new visitor;
new visitor;


// $visitor = new visitor;
// echo $visitor->getVisitor();
Visitor::getVisitor();
?>