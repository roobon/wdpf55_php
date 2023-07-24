<?php 
class Visitor {
    private static $visitorNumber = 0;

      function __construct(){
        self::$visitorNumber++;

      }
      
      function getVisitor(){
        return self::$visitorNumber;
      }
}


new Visitor;
new Visitor;
new Visitor;
$visitor =new Visitor;
echo $visitor->getVisitor();
?>
